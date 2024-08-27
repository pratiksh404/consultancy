<?php

namespace App\Repositories;

use App\Contracts\CourseRepositoryInterface;
use App\Http\Requests\CourseRequest;
use App\Models\Admin\Course;
use Illuminate\Support\Facades\Cache;

class CourseRepository implements CourseRepositoryInterface
{
    // Course Index
    public function indexCourse()
    {
        $courses = config('adminetic.caching', true)
            ? (Cache::has('courses') ? Cache::get('courses') : Cache::rememberForever('courses', function () {
                return Course::latest()->get();
            }))
            : Course::latest()->get();

        return compact('courses');
    }

    // Course Create
    public function createCourse()
    {
        //
    }

    // Course Store
    public function storeCourse(CourseRequest $request)
    {
        $course = Course::create($request->validated());
        $this->uploadImage($course);
    }

    // Course Show
    public function showCourse(Course $course)
    {
        return compact('course');
    }

    // Course Edit
    public function editCourse(Course $course)
    {
        return compact('course');
    }

    // Course Update
    public function updateCourse(CourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        $this->uploadImage($course);
    }

    // Course Destroy
    public function destroyCourse(Course $course)
    {
        $course->delete();
    }

    // Upload Image
    private function uploadImage(Course $course)
    {
        if (request()->has('thumbnail')) {
            $course
                ->addFromMediaLibraryRequest(request()->thumbnail)
                ->toMediaCollection('thumbnail');
        }
    }
}
