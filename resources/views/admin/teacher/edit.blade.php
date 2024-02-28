@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Teacher</h1>
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
                    <form action="{{ route('teacher.update', ['teacher' => $teacher->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                        <div class="form-group">
                                <label for="user_id">User Type:</label>
                                <select name="user_id" class="form-control" aria-label="Select User">
                                    <option selected disabled>Select User</option>
                                    @foreach($admins as $admin)
                                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $teacher->name) }}">
                                @error('phone')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" value="male" {{ $teacher->gender == 'male' ? 'checked' : '' }}>
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" value="female" {{ $teacher->gender == 'female' ? 'checked' : '' }}>
                                    <label class="form-check-label">Female</label>
                                </div>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" value="other" {{ $teacher->gender == 'other' ? 'checked' : '' }}>
                                    <label class="form-check-label">Other</label>
                                </div>
                                @error('gender')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $teacher->phone) }}">
                                @error('phone')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" name="dateofbirth" id="dateofbirth" class="form-control" value="{{ old('dateofbirth', $teacher->dateofbirth) }}">
                                @error('dateofbirth')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ old('current_address', $teacher->current_address) }}">
                                @error('address')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection