<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Magazyn</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div class="content">
                    <div class="title m-b-md">
                        Depozyt
                    </div>

                <div class="row">

                    <div id="orange" class="col-md-4">
                        <a class="change-a" href="/blogs/">

                            <div class="change-title">
                                OSOBY
                            </div>

                            <div class="change-bar">
                                <div class="change-date">
                                    Lista osób
                                </div>

                                <img src="/img/osoby2.png" class="change-category-icon" />
                            </div>
                        </a>
                    </div>

                    <div id="green" class="col-md-4">
                        <a class="change-a" href="/bron">
                            <div class="change-title">
                                BROŃ
                            </div>
                            <div class="change-bar">
                                <div class="change-date">
                                    Wykaz broni
                                </div>
                                <img src="/img/gun.png" class="change-category-icon" />
                            </div>

                        </a>
                    </div>


                    <div id="aqua" class="col-md-4">
                        <a class="change-a" href="/magazyns">
                            <div class="change-title">
                                MAGAZYN
                            </div>
                            <div class="change-bar">
                                <div class="change-date">
                                    Ewidencja broni w magazynie
                                </div>
                                <img src="/img/magazyn.png" class="change-category-icon" />
                            </div>

                        </a>
                    </div>

                    <div id="raport" class="col-sm-2">
                        <div class="change-title2">
                            <img src="/img/soldier.png" class="change-category-icon" /> Osób w systemie: <span style="color: red">{{ $blogTotal ?? ''}}</span>

                            <p></p>
                            <img src="/img/gun.png" class="change-category-icon" /> Broń w systemie: </span>
                            <p></p>
                            <img src="/img/magazyn.png" class="change-category-icon" />Pozycji w magaz.:  </span>

                        </div>


            </div>
                    <div id="raport" class="col-sm-2">
                        <div class="change-title2">

                            P-83: <p>{{  $p83 ?? '' }}</p>

                            Wist 94: <p>{{  $wist ?? '' }}</p>
                            kbk AKMS: <p>{{  $kbk ?? '' }}</p>

                            P-64 <p>{{  $p64 ?? '' }}</p>
                            BERYL C: <p>{{  $beryl ?? '' }}</p>

                        </div>

        </div>


        </div>
                </div>
        </div>
    </body>
</html>
