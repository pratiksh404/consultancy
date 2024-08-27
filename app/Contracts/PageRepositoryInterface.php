<?php

namespace App\Contracts;

use App\Http\Requests\PageRequest;
use App\Models\Admin\Page;

interface PageRepositoryInterface
{
    public function indexPage();

    public function createPage();

    public function storePage(PageRequest $request);

    public function showPage(Page $Page);

    public function editPage(Page $Page);

    public function updatePage(PageRequest $request, Page $Page);

    public function destroyPage(Page $Page);
}
