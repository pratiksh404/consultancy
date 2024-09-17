<?php

namespace App\Services;

use Pratiksh\Adminetic\Models\Admin\Data;

class BranchContact
{
    public $data;

    public $contacts;

    public function __construct()
    {
        $this->data = Data::firstOrCreate([
            'name' => 'branch_contacts',
        ]);

        $this->contacts = $this->data->content;
    }

    public function save($content)
    {
        $this->data->update([
            'content' => $content,
        ]);

        $this->contacts = $this->data->content;

        return $this->data;
    }
}
