<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
         $admins= User::all();
        return view('admin.users.index')->with('admins', $admins);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
   

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users|max:255',
        //     'password' => 'required|string|min:8',
        //     // Add more validation rules as needed
        // ]);
        // dd($request->all());

        $input = $request->all();
        $admins = User::create($input);
        $admins->save();

        return redirect('users')->with('flash_message', 'Admin Successfully Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $admins = User::find($id);
        return view('admin.users.show')->with('admins', $admins);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $admins = User::find($id);
        return view('admin.users.edit')->with('admins', $admins);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {


        // dd($request->all());

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users,email,' . $id,
        //     // Add more validation rules as needed
        // ]);

        $admins = User::find($id);
        $input = $request->all();
        $admins->update($input);
        return redirect('users')->with('flash_message', 'Admin Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('users')->with('flash_message', 'Admin deleted');
    }
}
