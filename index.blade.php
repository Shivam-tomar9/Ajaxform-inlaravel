@extends('admin.master')
@section('css')
<link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')


<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

             
  <h2>Student Information</h2>
  <a href="{{url('/')}}/crud-add"><button type="button" class="btn btn-success">Add+</button></a>
  <p></p>            
  <table class="table table-hover table-bordered ">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Phone No</th>
        <th>Email</th>
        <th>Image</th>
       
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($input as $data)
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->phoneno}}</td>
        <td>{{$data->email}}</td>
        <td><img src="{{ asset('/images/'.$data->image)}}" width="70px" height="30px" alt="Image">
        
        <td><a href="{{url('/')}}/crud-edit/{{$data->id}}"><button type="button" class="btn btn-primary">Edit</button></a>
        <a href="{{url('/')}}/crud-delete/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</div>  

 

@endsection
@push('scripts')
 
<script src="/https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('.table').DataTable();
} );
    </script>
@endpush