<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins= User::all();
        return view('admin.dashboard')->with('admins', $admins);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->id==1){
            return view('admin.admin.dashboard');
            
        }
        else if (Auth::user()->id==2){
            return view('admin.teacher.dashboard');
        }
        
        else if (Auth::user()->id==3){
            return view('admin.student.dashboard');
        }
    
        else if (Auth::user()->id==4){
            return view('admin.parent.dashboard');
        }
        else{
            Auth::logout();
            return redirect(url('logout'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
