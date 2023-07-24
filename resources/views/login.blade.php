
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
    <a href="../../index2.html"><b>SIOMA</b>login</a>
</div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login to start your session</p>
        <form action="/login" method="post">
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
        <input type="password" class="form-control" placeholder="Password" id="password" required>
</div>

<div class="text-center">
<button type="submit" class="btn btn-primary my-6">Log in</button>
</div>

</div>
</form>
<p class="mb-1">
<a href="forgot-password.html">I forgot my password</a>
</p>
</div>

</div>
</div>


<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
