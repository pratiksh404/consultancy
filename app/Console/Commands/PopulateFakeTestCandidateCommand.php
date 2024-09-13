<?php

namespace App\Console\Commands;

use App\Models\Admin\Test;
use Illuminate\Console\Command;

class PopulateFakeTestCandidateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:candidate {--count=40} {--test}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to populate fake test candidates';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count = $this->option('count');
        $test_id = $this->option('test');
        $this->output->writeln('Populating fake test candidates...');
        if ($test_id) {
            $test = \App\Models\Admin\Test::find($test_id);
            if (! $test) {
                $this->error('Test not found');

                return;
            }
            $this->populate($test, $count);
        } else {
            $tests = Test::doesntHave('candidates')->each(function ($test) use ($count) {
                $this->populate($test, $count);
            });
        }

        $this->info('====== Done =======');
    }

    private function populate(Test $test, $count)
    {
        $i = 1;
        $bar = $this->output->createProgressBar($count);
        $this->info('Populating fake candidates for test : '.$test->code);

        $bar->start();
        while ($i <= $count) {
            $candidate = $test->candidates()->create([
                'code' => rand(100000, 999999),
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'email' => fake()->email,
                'phone' => fake()->phoneNumber,
                'course_id' => $test->course_id,
                'attended' => true,
            ]);

            // Fake Result
            $marks = $test->data['marks'] ?? [];
            if (count($test->course->sections ?? []) > 0) {
                foreach ($test->course->sections as $section) {
                    $marks[$candidate->id]['sections'][$section['name']] = rand(2, $section['full_marks'] * 2) / 2;
                }
                $marks[$candidate->id]['overall'] = round((array_sum($marks[$candidate->id]['sections']) / count($marks[$candidate->id]['sections']) * 2) / 2);
            }
            $data = $test->data;
            $data['marks'] = $marks;
            $test->update(['data' => $data]);

            $bar->advance();
            $i++;
        }

        $bar->finish();
    }
}
