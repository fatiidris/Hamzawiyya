@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Class</h1>
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
                    <form action="{{ route('classes.update', $class->id) }}" method="POST" class="w-full max-w-xl px-6 py-12">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="class_name">Class Name</label>
                                <input name="class_name" class="form-group" type="text" value="{{ $class->name }}" required placeholder="Enter Class Name">
                            </div>

                            <div class="form-group">
                                <label for="class_numeric">Class Numeric</label>
                                <input name="class_numeric" class="form-group" type="number" value="{{ $class->class_numeric }}">
                            </div>

                            <div class="form-group">
                                <label for="teacher_id">Assign Teacher</label>
                                <div class="relative">
                                    <select name="teacher_id" class="form-group" id="">
                                        <option value="">--Select Teacher--</option>
                                        @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}" {{ $class->teacher_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="class_description">Class Description</label>
                                <input name="class_description"
                                    class="form-group"
                                    type="text" value="{{ $class->class_description }}">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
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
