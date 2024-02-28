<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers= Teacher::with('user')->get();
        return view('admin.teacher.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $admins = User::all();
        return view('admin.teacher.create')->with('admins', $admins);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
        $input = $request->all();
        // dd($input);
        Teacher::create($input);

    return redirect()->route('teacher.index')->with('flash_message', 'Teacher Added Successfully'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $teacher = Teacher::find($id);
        return view('admin.teacher.show')->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $teacher = Teacher::find($id);
        $admins = User::all();
        return view('admin.teacher.edit')->with('teacher', $teacher);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teacher = Teacher::find($id);
    
        // $validatedData = $request->validate([
        //     'user_id' => 'required',
        //     'gender' => 'required',
        //     'phone' => 'required',
        //     'dateofbirth' => 'required',
        //     'current_address' => 'required',
        //     'permanent_address' => 'required',
        //     'start_date' => 'required',
        // ]);
        $input = $request->all();
        $teacher->update($input);
    
        return redirect('teacher')->with('flash_message', 'Teacher Updated Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Teacher::destroy($id);
        return redirect('teacher')->with('flash_message', 'teacher deleted Successfully');
    }
}
