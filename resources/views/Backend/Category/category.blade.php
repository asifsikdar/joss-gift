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
           @if(session('delete'))
            <div class="alert alert-danger" role="alert">
                {{session('delete')}}
            </div>
            <hr>
           @endif
         <form action="{{ url('api/category/store') }}" method="POST">
             @csrf
            <div class="form-group">
              <label for="inputName">Category-Name</label>
              <input type="text" name="category_name" id="inputName" class="form-control ">
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <input type="submit" value="Create new Porject" class="btn btn-success float-right">
      </form>
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
                @foreach($category as $cat)
                <tr id="sid{{$cat->id}}">
                    <td>{{$cat->category_name}}</td>
                    <td>
                       <a href="{{url('api/category_delete')}}/{{$cat->id}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a>
                       <a href="{{$cat->id}}" class="btn btn-warning btn-sm edit" data-toggle="modal"
                           data-target="#exampleModal{{ @$cat->id }}" data-id="{{ $cat->id }}"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                 @endforeach
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

  <!-- Button trigger modal -->

  <!-- Modal -->
  @foreach($category as $cat)
  <div class="modal fade" id="exampleModal{{ @$cat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('cat.update',$cat->id)}}" method = "post">
             @csrf
           <div class="form-group">
                <label for="inputName">Category-Name</label>
                <input type="text" id="category_name" name="category_name" value="{{$cat->category_name}}" class="form-control ">
           </div>
            <div class="modal-footer">
             <button type="button" id="update_data" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save changes</button>
           </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach



@endsection
