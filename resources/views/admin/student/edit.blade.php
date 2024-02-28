@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Student</h1>
          </div>
         
        </div>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->      
>
      
      <form action="{{ route('student.update', $student->id) }}"  method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <div class="card-body">
        <div class="form-group">
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value = "{{ $student->name }}"></br>
        </div>
        <div class="form-group">
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" value="{{ $student->address }}"></br>
        </div>
        <div class="form-group">
        <label>Phone Number</label></br>
        <input type="text" name="phone" id="phone" class="form-control" value="{{ $student->phone }}"></br>
        </div>
        <div class="form-group">
        <label>Date of Birth</label></br>
        <input type="text" name="dob" id="dob" class="form-control" value="{{ $student->dob }}"></br>
        </div>
        <div class="form-group">
        <label>Sex</label></br>
        <input type="sex" name="sex" id="sex" class="form-control" value="{{ $student->sex }}"></br>
        </div>
        <div class="form-group">
        <label>Start Date</label></br>
        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $student->start_date }}"></br>
        </div>
        <div class="form-group">
        <label>Parent Name</label></br>
        <input type="text" name="parent_name" id="parent_name" class="form-control" value="{{ $student->parent_name }}"></br>
        </div>
        <div class="card-footer">
        <input type="submit" value="Save" class="btn btn-success"></br>
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
    
    </section>
    <!-- /.content -->
  </div>
            @endsection

