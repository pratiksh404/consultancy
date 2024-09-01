<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Test;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use App\Http\Controllers\Controller;
use App\Contracts\TestRepositoryInterface;

class TestController extends Controller
{
    protected $testRepositoryInterface;

    public function __construct(TestRepositoryInterface $testRepositoryInterface)
    {
        $this->testRepositoryInterface = $testRepositoryInterface;
        $this->authorizeResource(Test::class, 'test');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.test.index', $this->testRepositoryInterface->indexTest());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestRequest $request)
    {
        $this->testRepositoryInterface->storeTest($request);
        return redirect(adminRedirectRoute('test'))->withSuccess('Test Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        return view('admin.test.show', $this->testRepositoryInterface->showTest($test));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        return view('admin.test.edit', $this->testRepositoryInterface->editTest($test));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TestRequest  $request
     * @param  \App\Models\Admin\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(TestRequest $request, Test $test)
    {
        $this->testRepositoryInterface->updateTest($request, $test);
        return redirect(adminRedirectRoute('test'))->withInfo('Test Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        $this->testRepositoryInterface->destroyTest($test);
        return redirect(adminRedirectRoute('test'))->withFail('Test Deleted Successfully.');
    }
}
