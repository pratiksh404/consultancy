<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Services\BranchContact;
use Livewire\Component;

class ContactManagement extends Component
{
    public $data;

    public $contacts;

    public function mount()
    {
        $branch_contact = new BranchContact();
        $this->data = $branch_contact->data;
        $this->contacts = $branch_contact->contacts;
    }

    public function add_branch()
    {
        $this->contacts[] = [
            'title' => null,
            'address' => null,
            'sub_title' => null,
            'groups' => [
                [
                    'title' => null,
                    'emails' => [
                        [
                            'title' => null,
                            'email' => null,
                        ],
                    ],
                    'phones' => [
                        [
                            'title' => null,
                            'phone' => null,
                        ],
                    ],
                ],
            ],
        ];
    }

    public function remove_branch($key)
    {
        $branches = $this->contacts;
        unset($branches[$key]);
        $this->contacts = $branches;
    }

    public function add_branch_group($key)
    {
        $this->contacts[$key]['groups'][] = [
            'title' => null,
            'emails' => [
                [
                    'name' => null,
                    'value' => null,
                ],
            ],
            'phones' => [
                [
                    'name' => null,
                    'value' => null,
                ],
            ],
        ];
    }

    public function add_branch_group_email($key, $group_key)
    {
        $this->contacts[$key]['groups'][$group_key]['emails'][] = [
            'name' => null,
            'value' => null,
        ];
    }

    public function remove_branch_group_email($key, $group_key, $email_key)
    {
        $contacts = $this->contacts;
        unset($contacts[$key]['groups'][$group_key]['emails'][$email_key]);
        $this->contacts = $contacts;
    }

    public function add_branch_group_phone($key, $group_key)
    {
        $this->contacts[$key]['groups'][$group_key]['phones'][] = [
            'name' => null,
            'value' => null,
        ];
    }

    public function remove_branch_group_phone($key, $group_key, $phone_key)
    {
        $contacts = $this->contacts;
        unset($contacts[$key]['groups'][$group_key]['phones'][$phone_key]);
        $this->contacts = $contacts;
    }

    public function remove_all_branch_group($key)
    {
        $branches = $this->contacts;
        unset($branches[$key]['groups']);
        $this->contacts = $branches;
    }

    public function remove_branch_group($key, $group_key)
    {
        $branches = $this->contacts;
        unset($branches[$key]['groups'][$group_key]);
        $this->contacts = $branches;
    }

    public function save()
    {
        (new BranchContact)->save($this->contacts);
        $this->emit('branch_contact_saved');
    }

    public function render()
    {
        return view('livewire.admin.setting.contact-management');
    }
}
