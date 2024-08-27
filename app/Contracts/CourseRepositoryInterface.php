<?php

namespace App\Contracts;

use App\Models\Admin\Course;
use App\Http\Requests\CourseRequest;

interface CourseRepositoryInterface
{
    public function indexCourse();

    public function createCourse();

    public function storeCourse(CourseRequest $request);

    public function showCourse(Course $Course);

    public function editCourse(Course $Course);

    public function updateCourse(CourseRequest $request, Course $Course);

    public function destroyCourse(Course $Course);
}
