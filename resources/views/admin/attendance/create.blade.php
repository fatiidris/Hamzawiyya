@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Attendance for class :- {{ $class->class_name }}</h1>
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
                    <a href="{{ url('attendance') }}"><button class="btn btn-primary btn-sm">Back</button></a>
                    </div>
                </div>
                    
        <div class="card-body">
            <div class="form-group">
                    @error('attendences')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    @if(session('status'))
                        <span class="form group">{{ session('status') }}</span>
                    @endif
                </div>
                <h3 class="text-gray-700 uppercase font-bold"> Date: {{ date('Y-m-d') }}</h3>
            </div>

            <div class="card body">
                <div class="form group">
                    <div class="form group">Student</div>
                    <div class="form group">Roll</div>
                    <div class="form group">Actions</div>
                </div>
                <form action="{{ route('teacher.attendance.store') }}" method="POST">
                    @foreach ($class->students as $student)
                        <div class="flex items-center justify-between border border-gray-200">
                            @csrf
                            <div class="w-4/12 text-sm text-left text-gray-600 py-2 px-4 font-semibold">{{ $student->user->name }}</div>
                            <div class="w-3/12 text-sm text-left text-gray-600 py-2 px-4 font-semibold">{{ $student->roll_number }}</div>
                            <div class="w-5/12 text-sm text-right py-2 px-4 flex items-center justify-end">
                                <label class="block text-green-500 font-semibold sm:border-r sm:pr-4">
                                    <input name="attendences[{{ $student->id }}]" class="leading-tight" type="radio" value="present">
                                    <span class="text-sm">Present</span>
                                </label>
                                <label class="ml-4 block text-red-500 font-semibold">
                                    <input name="attendences[{{ $student->id }}]" class="leading-tight" type="radio" value="absent">
                                    <span class="text-sm">Absent</span>
                                </label>
                            </div>
                            <input type="hidden" name="class_id" value="{{ $student->class_id }}">
                            <input type="hidden" name="teacher_id" value="{{ $class->teacher_id }}">
                        </div>
                    @endforeach
                    <div class="mt-6">
                        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Submit Attendance
                        </button>
                    </div>
                </form>
            </div><!-- Log on to codeastro.com for more projects -->  
        </div>

    </div>
@endsection