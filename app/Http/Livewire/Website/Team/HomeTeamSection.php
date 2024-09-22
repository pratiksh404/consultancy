<?php

namespace App\Http\Livewire\Website\Team;

use App\Models\Admin\Team;
use Livewire\Component;
use Livewire\WithPagination;

class HomeTeamSection extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'website.layouts.components.pagination';
    }

    public function render()
    {
        $teams = Team::active()->position()->paginate(1);

        return view('livewire.website.team.home-team-section', compact('teams'));
    }
}
