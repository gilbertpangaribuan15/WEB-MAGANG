<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('material.create',[
            'course'=>$course
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Course $course)
    {
        $validatedData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'link'=>'required',
        ]);
        $validatedData['course_id']=$course->id;
        Material::create($validatedData);
        return redirect()->route('courses.show',$course->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course,Material $material)
    {
        return view('material.edit',[
            'course'=>$course,
            'material'=>$material
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course, Material $material)
    {
        $validatedData=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'link'=>'required',
        ]);
        $material->update($validatedData);
        return redirect()->route('courses.show',$course->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course, Material $material)
    {
        $material->delete();
        return redirect()->route('courses.show',$course->id);
    }
}
