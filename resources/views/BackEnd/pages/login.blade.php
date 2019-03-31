<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Admin Login | Roya Foundation</title>
        <link rel="shortcut icon" href=" {{ asset('FrontEnd/images/roya.ico') }} ">
        <link href=" {{ asset('BackEnd/css/main.css') }} " rel="stylesheet">
        <link href=" {{ asset('BackEnd/css/login.css') }} " rel="stylesheet">
        <link href=" {{ asset('BackEnd/css/themes/all-themes.css') }} " rel="stylesheet" />
    </head>
    <body class="login-page authentication">
        <div class="container">
            <div class="card-top"></div>
            <div class="card locked">
                <h1 class="title">Admin Login</h1>
                <div class="col-md-5">
                    <div class="thumb">
                        <img class="media-object" src=" {{ asset('BackEnd/images/admin.png') }} " alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <form id="sign_in" method="POST" action=" {{ route('login') }} ">
                        @csrf

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="User Email" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <input class="btn btn-raised waves-effect g-bg-cyan" type="submit" value="LogIn">
                        <!--    @if (Route::has('password.request'))
                                <div class="col-xs-12 text-center">
                                    <a href=" {{ route('password.request') }} ">Forgot Your Password?</a>
                                </div>
                            @endif -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="theme-bg"></div>
    <script src=" {{ asset('BackEnd/bundles/libscripts.bundle.js') }} "></script>
    <script src=" {{ asset('BackEnd/bundles/vendorscripts.bundle.js') }} "></script>
    <script src=" {{ asset('BackEnd/bundles/mainscripts.bundle.js') }} "></script>
</body>
</html>