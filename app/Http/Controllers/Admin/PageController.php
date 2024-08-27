<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\PageRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Admin\Page;

class PageController extends Controller
{
    protected $pageRepositoryInterface;

    public function __construct(PageRepositoryInterface $pageRepositoryInterface)
    {
        $this->pageRepositoryInterface = $pageRepositoryInterface;
        $this->authorizeResource(Page::class, 'page');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.index', $this->pageRepositoryInterface->indexPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $this->pageRepositoryInterface->storePage($request);

        return redirect(adminRedirectRoute('page'))->withSuccess('Page Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('admin.page.show', $this->pageRepositoryInterface->showPage($page));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.page.edit', $this->pageRepositoryInterface->editPage($page));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, Page $page)
    {
        $this->pageRepositoryInterface->updatePage($request, $page);

        return redirect(adminRedirectRoute('page'))->withInfo('Page Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $this->pageRepositoryInterface->destroyPage($page);

        return redirect(adminRedirectRoute('page'))->withFail('Page Deleted Successfully.');
    }
}
