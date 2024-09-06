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
            $test->candidates()->create([
                'code' => rand(100000, 999999),
                'name' => fake()->name,
                'email' => fake()->email,
                'phone' => fake()->phoneNumber,
                'course_id' => $test->course_id,
            ]);

            $bar->advance();
            $i++;
        }

        $bar->finish();
    }
}
