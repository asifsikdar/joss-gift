@extends('../Backend/master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category-Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category-Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      
        <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ url('api/category ') }}" method="POST">
                  @csrf
                <div class="form-group">
                  <label for="inputName">Category-Name</label>
                  <input type="text" name="category_name" id="inputName" class="form-control">
                </div>
              </form> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <input type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
       
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Category-List</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                    Explorer 4.0
                    </td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                    Explorer 5.0
                    </td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                    Explorer 5.0
                    </td>
                </tr>
              
                </tbody>
                <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                </tr>
                </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
                <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-12">
          {{-- <a href="#" class="btn btn-secondary">Cancel</a><br><br> --}}
          {{-- <input type="submit" value="Create new Porject" class="btn btn-success float-right"> --}}
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection