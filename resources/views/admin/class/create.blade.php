@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add New Class</h1>
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
                    <form action="{{ url('class') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="class_name">Class Name</label>
                                <input name="class_name" class="form-control" type="text"  required placeholder="Enter Class Name">
                                @error('class_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="class_numeric">Class Numeric</label>
                                <input name="class_numeric" class="form-control" type="number" value="{{ old('class_numeric') }}">
                                @error('class_numeric')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="teacher_name">Assign Teacher</label>
                                <div class="relative">
                                    <select name="teacher_name" class="form-control" id="">
                                        <option value="">--Select Teacher--</option>
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                                @error('teacher')
                                <p class="text-red-500 text-xs font-normal italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="class_description">Class Description</label>
                                <input name="class_description"
                                    class="form-control"
                                    type="text" value="{{ old('class_description') }}">
                                @error('class_description')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
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
