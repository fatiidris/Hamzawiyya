@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
   <!-- Main content -->
   <section class="content">
        
          
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="get" action="{{ url('users') }}">
            
                <div class="card-body">
                    <div  class="row">
                  <div class="form-group col-md-3">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="" name="name" value="{{Request::get('name')}}"  placeholder="Enter Name">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" id="" name="email" value="{{Request::get('email')}}" placeholder="Enter Email">
                  </div>
                  <div class="form-group col-md-3">
                    <button class= "btn btn-primary" type="submit" style="margin-top: 30px;">search</button>
                   <a href="{{ url('users') }}"  class= "btn btn-success" type="submit" style="margin-top: 30px;">Reset</a> 
                  </div>
                  </div>
                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
       
            <!-- /.card -->
            <!-- Horizontal Form -->
                    <!-- /.card -->

        
        </div>
        <div class="col-sm-6">
            <h1>Admin List </h1>
          </div>
    <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
                        <a href="{{ url('/users/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Admin
                        </a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Password</th>
                                        <th>Actions</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach($admins as $admin)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->passward }}</td>
 
                                        <td>
                                            <a href="{{ url('/users/' . $admin->id) }}" title="View users"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/users/' . $admin->id . '/edit') }}" title="Edit users"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/users' . '/' . $admin->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete users" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div>
                                
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

@endsection