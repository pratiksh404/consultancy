<?php

namespace App\Contracts;

use App\Http\Requests\FaqRequest;
use App\Models\Admin\Faq;

interface FaqRepositoryInterface
{
    public function indexFaq();

    public function createFaq();

    public function storeFaq(FaqRequest $request);

    public function showFaq(Faq $Faq);

    public function editFaq(Faq $Faq);

    public function updateFaq(FaqRequest $request, Faq $Faq);

    public function destroyFaq(Faq $Faq);
}
