<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/title.png">
    <title>IT Institute</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 24px;
                font-weight: bold;
                letter-spacing: .1rem;
                
                text-transform: uppercase;
            }
            @media screen and (max-width: 572px) {
                .links > a {
                font-size: 16px;
            }
    }

            .m-b-md {
                margin-bottom: 30px;
            }

            body {
  background-image: url("/images/welcome.jpg");
  background-repeat: no-repeat;
  background-position: top;
  background-size: cover;

}
    .button {
    background-color: black;
    border: none;
    color: white;
    
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 12px;
    cursor: pointer;
    }
</style>
    </head>
    <body>
        <div class="flex-center position-ref full-height ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="button" href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif

           
    </body>
</html>
