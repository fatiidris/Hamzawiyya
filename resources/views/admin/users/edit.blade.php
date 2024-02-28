@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Admin</h1>
          </div>
         
        </div>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->      
      <form action="{{ url('users/' .$admins->id) }}" method="post">
      @csrf
        @method('PUT')
        <div class="card-body">
         <div class="form-group">
        <input type="hidden" name="id" id="id" class="form-control" value= "{{$admins->id }}">
        </div>
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" id="name" class="form-control" value= "{{$admins->name }}">
        </div>
        <div class="form-group">
        <label>Email Address</label></br>
        <input type="email" name="email" id="email" class="form-control" value = "{{ $admins->email }}" >
        </div>
        <div class="form-group">
        <label>Password</label></br>
        <input type="password" name="password" id="password" class="form-control" value = "{{ $admins->password }}">
        </div>
        <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
       
            <!-- /.card -->
            <!-- Horizontal Form -->
                    <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection