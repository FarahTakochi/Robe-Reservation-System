<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>KICT Graduation Robe System</title>
    </head>
    <style media="screen">
        body {
            background-image: url({{asset('css/iRobe.png')}});
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        a:active {
            text-decoration: underline;
        }

        h1, p, a {
            font-family: sans-serif;
        }

        .topNav {
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 80px;
            background-color: #0D8368;
            display: flex;
        }

        h1 {
            color: white;
            padding-left: 10px;
        }

        .iiulogo {
            padding: 10px;
            padding-left: 20px;
            width: 60px;
        }

        footer {
            position: absolute;
            left: 0px;
            bottom: 0px;
            width: 100%;
            height: 80px;
            background-color: #0D8368;
        }

        .copyright {
            font-family: sans-serif;
            color: white;
            padding: 15px;
            padding-left: 20px;
        }

        .hyperlinks {
            position: absolute;
            right: 0px;
            padding: 30px;
        }
    </style>
    <body>
        <div class="topNav">
            <div class="logo">
                <img size src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/International_Islamic_University_Malaysia_logo.svg/1024px-International_Islamic_University_Malaysia_logo.svg.png" class="iiulogo">
            </div>
            <div class="dashboard">
                <h1>iRobe</h1>
            </div>
            @if (Route::has('login'))
                <div class="hyperlinks">
                    @auth
                        <a href="{{ url('/dashboard') }}" style="color:white;">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" style="color:white; padding-right: 10px;">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color:white;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <footer>
            <p class="copyright">©2022 International Islamic University Malaysia</p>
        </footer>
    </body>
</html>