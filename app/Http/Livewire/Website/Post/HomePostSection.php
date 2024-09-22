<?php

namespace App\Http\Livewire\Website\Post;

use App\Models\Admin\Post;
use Livewire\Component;
use Livewire\WithPagination;

class HomePostSection extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'website.layouts.components.pagination';
    }

    public function render()
    {
        $posts = Post::published()->latest()->take(3)->paginate(3);

        return view('livewire.website.post.home-post-section', compact('posts'));
    }
}
