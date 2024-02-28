@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Admin Page</h1>
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
    <div class = "card-body">
        <h5 class = "card-title">Name: {{ $admins->name }}</h5>
        <p class = "card-text">Email Address: {{ $admins->email }} </p>
        <p class = "card-text">Password: {{ $admins->password }} </p>
        <a href="{{ url('users') }}"><button class="btn btn-primary btn-sm">Back</button></a>
    </div>

   </div>
  </div>
</div>
        <!-- /.row -->
    
    </section>
    <!-- /.content -->
  </div>
@endsection