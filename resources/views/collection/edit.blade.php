@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Collection</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Collection</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Horizontal Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('collection.update',['id' => $data->id]) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="card-body">
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{ $data->name }}">
                  <small class="red">
                      @error('name')
                          {{ $message }}
                      @enderror
                  </small>
                </div>
              </div>
            <div class="form-group row">
              <label for="inputType" class="col-sm-2 col-form-label">Type</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputType" placeholder="Type" name="type" value="{{ $data->type }}">
                <small class="red">
                    @error('name')
                        {{ $message }}
                    @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputDescription" placeholder="Description" name="description" value="{{ $data->description }}">
                <small class="red">
                    @error('name')
                        {{ $message }}
                    @enderror
                </small>
              </div>
            </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            <button type="reset" class="btn btn-default float-right">Cancel</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    <!-- /.content -->
  </div>

@endsection
