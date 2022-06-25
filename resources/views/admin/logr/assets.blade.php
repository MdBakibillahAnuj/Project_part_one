<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Auth ||@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}loger/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}loger/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/') }}loger/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/') }}loger/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        @yield('body')
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('/') }}loger/assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}loger/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}loger/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}loger/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}loger/assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="{{ asset('/') }}loger/assets/js/app.js"></script>
</body>

</html>


