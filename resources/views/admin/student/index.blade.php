
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
                        <h2>Registered Student</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Student
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                            <th>ID</th>
                                            <th>User Type</th>
                                            <th> Class</th>
                                            <th>Parent</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>DOB</th>
                                            <th>Address</th>
                                            <th>Start Date</th>
                                            <th>Actions</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                @foreach($classes as $class)
                                @foreach($parents as $parent)



                                    <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $student->user_id }}</td>
                                            <td>{{ $class->class_name }}</td> <!-- Corresponds to Assign Class -->
                                            <td>{{ $parent->name }}</td> 
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->gender }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>{{ $student->dateofbirth }}</td>
                                            <td>{{ $student->address }}</td>
                                            <td>{{ $student->start_date }}</td>

                                        <td>
                                        <a href="{{ url('/student/' . $student->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $student->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/student' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                         </td>
                                    </tr>
                                    @endforeach

                                    @endforeach

                                    @endforeach
                                </tbody>
                            </table>
                        
                        </div>
 
                    </div>
                </div>
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
  @include('layouts.footer')

          
@endsection