@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">

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
                <div class="card">
                    <div class="card-header">
                        <h2>Parent's List</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/parent/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Parent
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> User Type</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($parents as $parent)
                                <tr>
                                    <td>{{ $parent->id }}</td>
                                    <td>{{ $parent->user_id }}</td>
                                    <td>{{ $parent->name }}</td>
                                    <td>{{ $parent->gender }}</td>
                                    <td>{{ $parent->phone }}</td>
                                    <td>{{ $parent->address }}</td>
                                    <td>
                                        <a href="{{ url('/parent/' . $parent->id) }}" title="View parent"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/parent/' . $parent->id . '/edit') }}" title="Edit parent"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/parent' . '/' . $parent->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete parent" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                         </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Add Teacher Button -->
                <!-- <a href="{{ url('teacher/create') }}" class="btn btn-primary">Add New Teacher</a> -->
            </div>
        </div>
    </section>
</div>
@endsection
