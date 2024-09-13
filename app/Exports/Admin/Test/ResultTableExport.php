<?php

namespace App\Exports\Admin\Test;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResultTableExport implements FromArray, WithHeadings
{
    public $marks;

    public function __construct(array $marks)
    {
        $this->marks = $marks;
    }

    public function headings(): array
    {
        $heading[] = 'Name';
        foreach (collect($this->marks)->first()['sections'] as $section_name => $mark) {
            $heading[] = $section_name;
        }
        $heading[] = 'Overall';

        return $heading;
    }

    public function array(): array
    {
        return collect($this->marks)->map(function ($mark) {
            $name = $mark['candidate']['name'].' - '.$mark['candidate']['code'];
            $overall = $mark['overall'] ?? '*';
            $data[] = $name;
            foreach ($mark['sections'] as $section_name => $mark) {
                $data[] = $mark;
            }
            $data[] = $overall;

            return $data;
        })->toArray();
    }
}
