<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sviluppati App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: rgb(2,0,36);
                background: linear-gradient(338deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .container{
                height:100vh;
                display:flex;
                justify-content: center;
                align-items: center;
            }
            .box{
                background-color: #fff;
                height:340px;
                width:500px;
                padding:20px;
                display:flex;
                flex-direction: column;
                justify-content: center;
                
                border-radius:10px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 15px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display:inline-block;
                border-radius: 5px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <div class="content">
                    <div class="title m-b-md">
                        Auth App
                    </div>
                </div>

                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                <a href="{{ route('show_admin_login') }}">Admin</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                
                </div>
            </div>
        </div>
    </body>
</html>
