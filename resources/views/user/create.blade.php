@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create user</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('collection.index')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('user.index')}}">User</a></li>
              <li class="breadcrumb-item active">{{ $info['description'] }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">User Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('user.store') }}" method="POST">
            @csrf
          <div class="card-body">
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                  <small class="danger">
                      @error('name')
                          {{ $message }}
                      @enderror
                  </small>
                </div>
              </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                <small class="danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                <small class="danger">
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
