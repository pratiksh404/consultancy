<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Controller;
use App\Contracts\CourseRepositoryInterface;

class CourseController extends Controller
{
    protected $courseRepositoryInterface;

    public function __construct(CourseRepositoryInterface $courseRepositoryInterface)
    {
        $this->courseRepositoryInterface = $courseRepositoryInterface;
        $this->authorizeResource(Course::class, 'course');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.course.index', $this->courseRepositoryInterface->indexCourse());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $this->courseRepositoryInterface->storeCourse($request);
        return redirect(adminRedirectRoute('course'))->withSuccess('Course Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('admin.course.show', $this->courseRepositoryInterface->showCourse($course));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.course.edit', $this->courseRepositoryInterface->editCourse($course));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CourseRequest  $request
     * @param  \App\Models\Admin\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, Course $course)
    {
        $this->courseRepositoryInterface->updateCourse($request, $course);
        return redirect(adminRedirectRoute('course'))->withInfo('Course Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $this->courseRepositoryInterface->destroyCourse($course);
        return redirect(adminRedirectRoute('course'))->withFail('Course Deleted Successfully.');
    }
}
