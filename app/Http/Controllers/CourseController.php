<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('course.index',[
            'courses'=>Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'duration'=>'required',
        ]);
        Course::create($validatedData);
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('course.show',[
            'course'=>$course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('course.edit',[
            'course'=>$course
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $validatedData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'duration'=>'required',
        ]);
        $course->update($validatedData);
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        foreach($course->materials as $material){
            $material->delete();
        }
        $course->delete();
        return redirect()->route('courses.index');
    }
}
