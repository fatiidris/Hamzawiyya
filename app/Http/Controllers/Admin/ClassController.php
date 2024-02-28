<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\Teacher;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $classes = ClassModel::all();
        return view('admin.class.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $teachers = Teacher::latest()->get();
        return view('admin.class.create')->with('teachers', $teachers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'class_name' => 'required|string|max:255',
            'class_numeric' => 'required|numeric',
            'teacher_name' => 'required|exists:teachers,id',
            'class_description' => 'nullable|string',
            // Add more validation rules as needed
        ]);

        ClassModel::create($request->all());

        return redirect('class')->with('flash_message', 'Class Successfully Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $class = ClassModel::find($id);
        return view('admin.class.show')->with('class', $class);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassModel $class): View
    {
        $teachers = Teacher::latest()->get();
        return view('admin.class.edit')->with(['class' => $class, 'teachers' => $teachers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'class_name' => 'required|string|max:255',
            'class_numeric' => 'required|numeric',
            'teacher_id' => 'required|exists:teachers,id',
            'class_description' => 'nullable|string',
            
        ]);

        $class = ClassModel::find($id);
        $class->update($request->all());

        return redirect('class')->with('flash_message', 'Class Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        ClassModel::destroy($id);
        return redirect('class')->with('flash_message', 'Class deleted');
    }
}
