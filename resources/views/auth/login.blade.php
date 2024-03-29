<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyCOLLECTION</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="lte/dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#">My<b>COLLECTION</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('login-auth') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" value="admin@mail.com">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
          <div class="alert alert-danger small">{{ $message }}</div>
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" value="admin">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
          <div class="alert alert-danger small">{{ $message }}</div>
        @enderror
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p>Gunakan data berikut untuk login</p>
      <p>email : admin@mail.com</p>
      <p>Password : admin</p>
    </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="lte/dist/js/adminlte.min.js"></script>
@if(session('error'))
    <script>
        Swal.fire({
                icon: "error",
                text: "{{ session('error') }}",
            });
    </script>
@endif
@if(session('success'))
    <script>
        Swal.fire({
                icon: "info",
                text: "{{ session('success') }}",
            });
    </script>
@endif
</body>
</html>
