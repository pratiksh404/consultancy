<?php

namespace App\Repositories;

use App\Contracts\TestRepositoryInterface;
use App\Http\Requests\TestRequest;
use App\Models\Admin\Test;
use Illuminate\Support\Facades\Cache;

class TestRepository implements TestRepositoryInterface
{
    // Test Index
    public function indexTest()
    {
        $tests = config('adminetic.caching', true)
            ? (Cache::has('tests') ? Cache::get('tests') : Cache::rememberForever('tests', function () {
                return Test::latest()->get();
            }))
            : Test::latest()->get();

        return compact('tests');
    }

    // Test Create
    public function createTest()
    {

    }

    // Test Store
    public function storeTest(TestRequest $request)
    {
        Test::create($request->validated());
    }

    // Test Show
    public function showTest(Test $test)
    {
        return compact('test');
    }

    // Test Edit
    public function editTest(Test $test)
    {
        return compact('test');
    }

    // Test Update
    public function updateTest(TestRequest $request, Test $test)
    {
        $test->update($request->validated());
    }

    // Test Destroy
    public function destroyTest(Test $test)
    {
        $test->delete();
    }
}
