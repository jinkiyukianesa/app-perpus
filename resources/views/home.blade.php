<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>PEDAL LIBRARY</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 
        <!-- Styles -->
        <style>
            html, body {
                background-image:url(img/aku3.jpg);
                background-color: #fff;
               color: #636b6f;
               font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
 
            .full-height {
                height: 100vh;
            }
 
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
 
            .position-ref {
                position: relative;
            }
 
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
 
            .content {
                text-align: center;
                color: white;
            }
 
            .title {
                font-size: 84px;
            }
 
            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
 
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url(ADMIN . '/') }}">Admin</a>
                        <a href="{{ url('logout') }}">Logout</a>
                    @else
                        <a href="{{ url('login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
 
            <div class="content">
                <div class="title m-b-md">
                    <b>PEDAL LIBRARY  </b>
                </div>
 
                <div class="links">
                    <h2>Selamat Datang!</h2><br>
                    <h3>PEDAL LIBRARY Menyediakan berbagai macam buku.<br>
                    Silahkan melakukan Login terlebih dahulu, bagi yang belum memiliki akun<br>
                    silahkan Registrasi pada menu yang tersedia. :)</h3>
                </div>
            </div>
        </div>
    </body>
</html>