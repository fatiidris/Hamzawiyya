<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Parents;
use App\Models\User;
use Illuminate\View\View;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $parents= Parents::with('user')->get();
        return view('admin.parent.index')->with('parents', $parents);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $admins = User::all();
        return view('admin.parent.create', ['admins' => $admins]); // Pass the $admins variable to the view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        // dd($input);
         Parents::create($input);
        return redirect('parent')->with('flash_message', 'Parent Addedd Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $parent = Parents::find($id);
        return view('admin.parent.show')->with('parent', $parent);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $parent = Parents::find($id);
        return view('admin.parent.edit')->with('parent', $parent);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $parent = Parents::find($id);
        // dd($parent);
        $input = $request->all();
        $parent->update($input);
        return redirect('parent')->with('flash_message', 'Parent Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Parents::destroy($id);
        return redirect('parent')->with('flash_message', 'Parent deleted Successfully');
    }
}
