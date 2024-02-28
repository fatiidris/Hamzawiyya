@extends('layouts.app')
@include('layouts.header')

@section('content')
        <div class="content-wrapper" style="min-height: 1246.5px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add New Student</h1>
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
                            <!-- form start -->
                            <form action="{{ url('student') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="user_id">Assign User:</label>
                                <select name="user_id" class="form-control @error('user_id') is-invalid @enderror" aria-label="Select User" required>
                                    <option selected disabled>--Select User--</option>
                                    @foreach($admins as $admin)
                                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="class_id">Assign Class:</label>
                                <select name="class_id" class="form-control @error('class_id') is-invalid @enderror" aria-label="Select Class" required>
                                    <option selected disabled>--Select Class--</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                    @endforeach
                                </select>
                                @error('class_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Assign Parent:</label>
                                <select name="parent_id" class="form-control @error('parent_id') is-invalid @enderror" aria-label="Select Parent" required>
                                    <option selected disabled>Select Parent</option>
                                    @foreach($parents as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                    @endforeach
                                </select>
                                @error('parent_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Gender:</label><br>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input @error('gender') is-invalid @enderror" type="radio" value="male" id="gender_male" required>
                                    <label class="form-check-label" for="gender_male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input @error('gender') is-invalid @enderror" type="radio" value="female" id="gender_female" required>
                                    <label class="form-check-label" for="gender_female">Female</label>
                                </div>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input @error('gender') is-invalid @enderror" type="radio" value="other" id="gender_other" required>
                                    <label class="form-check-label" for="gender_other">Other</label>
                                </div>
                                @error('gender')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="dateofbirth">Date of Birth:</label>
                                <input type="date" name="dateofbirth" id="dateofbirth" class="form-control @error('dateofbirth') is-invalid @enderror">
                                @error('dateofbirth')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror">
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="start_date">Date Admitted:</label>
                                <input type="date" name="start_date" id="start_date" class="form-control @error('start_date') is-invalid @enderror">
                                @error('start_date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Save" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
