<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Traxx Studio</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                height: 3000px;
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
            #tentang_studio {
                width: 100%;
                height: 100vh;
                background: green;
            }
            #tentang_studio h2 {
                text-align: center;
            }

            #potret_studio {
                width: 100%;
                height: 100vh;
                background: yellow;
            }
            #potret_studio h2 {
                text-align: center;
            }

            #pengumuman {
                width: 100%;
                height: 100vh;
                background: grey;
            }
            #pengumuman h2 {
                text-align: center;
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
                    Traxx Studio
                </div>

                <div class="links">
                    <a href="#tentang_studio" >Tentang Studio</a>
                    <a href="#potret_studio">Potret Studio</a>
                    <a href="#pengumuman">Pengumuman</a>
                    
                </div>
            </div>
        </div>

        <section id='tentang_studio'>
            <h2>Tentang Studi</h2>
        </section>
        <section id="potret_studio">
            <h2>Potret Studio</h2>
        </section>
        <section id='pengumuman'>
            <h2>Pengumuman</h2>
        </section>
        <footer>
            <h2>Social Media</h2>
        </footer>
        
    </body>
</html>
