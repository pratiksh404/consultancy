<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\PostRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Admin\Post;

class PostController extends Controller
{
    protected $postRepositoryInterface;

    public function __construct(PostRepositoryInterface $postRepositoryInterface)
    {
        $this->postRepositoryInterface = $postRepositoryInterface;
        $this->authorizeResource(Post::class, 'post');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index', $this->postRepositoryInterface->indexPost());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create', $this->postRepositoryInterface->createPost());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $this->postRepositoryInterface->storePost($request);

        return redirect(adminRedirectRoute('post'))->withSuccess('Post Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', $this->postRepositoryInterface->showPost($post));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', $this->postRepositoryInterface->editPost($post));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $this->postRepositoryInterface->updatePost($request, $post);

        return redirect(adminRedirectRoute('post'))->withInfo('Post Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->postRepositoryInterface->destroyPost($post);

        return redirect(adminRedirectRoute('post'))->withFail('Post Deleted Successfully.');
    }
}
