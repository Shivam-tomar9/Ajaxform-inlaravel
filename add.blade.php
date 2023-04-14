@extends('admin.master');
@section('content');
<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registeration Form</h1>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="frm" action="{{url('/')}}/crud-save" method='post' enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
                <div class="form-group">
      <label for="email">Phone No:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter phone no" name="phoneno" required>
    </div>
                  
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required> 
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="" name="image" required>
    </div>
                  
                 
                

                <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

                </form>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  window.addEventListener('load',function(){
    swal({
  title: "Mandatory!",
  text: "You have to registeration first!",
  icon: "warning",
});
});

  
  </script><script>
    $(document).ready(function() {
        $('#frm').submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{url('/')}}/crud-save",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(data) {
                    swal({
                        title: "Success!",
                        text: "Your form has been submitted.",
                        icon: "success",
                    }).then(function() {
                        location.reload();
                    });
                },
                error: function(data) {
                    swal({
                        title: "Error!",
                        text: "An error occurred while submitting your form.",
                        icon: "error",
                    });
                }
            });
        });
    });
</script>
