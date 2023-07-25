
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIOMA | Login</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

        <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
</head>
    <body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
    <a><b>SIOMA</b>login</a>
</div>

@if (session()->has('success'))
<div class="alert alert-success alert-dismisssible fade show" role="alert">
    {{ session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('LoginError'))
<div class="alert alert-success alert-dismisssible fade show" role="alert">
    {{ session('LoginError')}}
    <button type="button" class='button-close' data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login to start your session</p>
        <form action="/login-proses" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-append">
        <div class="input-group-text">
        <span class="fas fa-envelope"></span>
    </div>
</div>
        <input type="email" name='email' class="form-control @error ('email') is-invalid 
        @enderror" id='email' placeholder="name@example.com" autofocus required value="{{ old ('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
</div>
    <div class="input-group mb-3">
        <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-lock"></span>
            </div>
        </div>
        <input type="password" class="form-control" name="password" placeholder="Password" id="password" value="{{ old ('password') }}" required>
</div>

<div class="text-center">
<button type="submit" class="btn btn-primary my-6">Login</button>
</div>

</div>
</form>
</div>

</div>
</div>


<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
