<?php

namespace App\Http\Livewire\Website\Post;

use App\Models\Admin\Category;
use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class PostPanel extends Component
{
    use WithPagination;

    protected $query;

    public $title;

    public $post_ids;

    public $search;

    public $featured_positioned_posts;

    public $categories;

    public $category_id;

    public $tags;

    public $tag_id;

    public function mount(Builder $query, $title = null)
    {
        $this->query = $query;
        $this->title = $title;
        $this->post_ids = ! is_null($query) ? $query->pluck('id')->toArray() : [];
        $this->featured_positioned_posts = Post::published()->active()->featured()->position()->take(4)->get();
        $this->categories = Category::where('model', 'Post')->has('posts')->get();
        $this->tags = Tag::has('posts')->get();
    }

    public function paginationView()
    {
        return 'website.layouts.components.pagination';
    }

    public function render()
    {
        $posts = $this->getPosts();

        return view('livewire.website.post.post-panel', compact('posts'));
    }

    private function getPosts()
    {
        $data = Post::whereIn('id', $this->post_ids);

        $data = $this->getCategoryPosts($data);

        $data = $this->getTagPosts($data);

        $data = $this->getSearchedPost($data);

        return $data->paginate(3);
    }

    private function getCategoryPosts($data)
    {
        if (! is_null($this->category_id)) {
            return $data->where('category_id', $this->category_id);
        }

        return $data;
    }

    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Get posts by tag ID.
     *
     * @param  mixed  $data
     * @return mixed
     */
    /******  0495cacd-9308-4e2b-a46c-2a5b5f88f4de  *******/
    private function getTagPosts($data)
    {
        if (! is_null($this->tag_id)) {
            $tag_id = $this->tag_id;

            return $data->whereHas('tags', function ($qry) use ($tag_id) {
                return $qry->where('tags.id', $tag_id);
            });
        }

        return $data;
    }

    private function getSearchedPost($data)
    {
        if (! is_null($this->search)) {
            return $data->where('name', 'LIKE', "%{$this->search}%");
        }

        return $data;
    }
}
