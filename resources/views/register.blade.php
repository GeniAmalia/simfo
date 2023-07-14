
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIOMA | Registration Page</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="58c555a4-8af9-4791-a543-b90c000cbcc3">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})),{})))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition register-page">
    <div class="register-box">
    <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="/login" class="h1"><b>SIOMA</b>Registration</a>
    </div>
        <div class="card-body">
            <p class="login-box-msg">Registration Form</p>
            <form action="/register" method="post">
                @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" id="name">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
        </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="username" id="username">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
        </div>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" id="email">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-envelope"></span>
        </div>
        </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" id="password">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
        </div>
        </div>
        </div>
        <div class="col-4">
            <a href="/register"></a>
            <button type="submit" class="btn btn-primary btn-block" >Register</button>
        </div>
        </div>
        <p class="mb-0">
    Already Registered?<a href="/login" class="text-center">Login</a>
</p>
        </form>
    </div>
    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
