<!doctype html>
<html class="h-100">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content>
        <meta name="author"
            content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.122.0">
        <title>Library</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
        <link href="/assets/style.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">

        <link
            href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap"
            rel="stylesheet">

        {{-- CDN google font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

        <body class="d-flex flex-column h-100">
            <div class="container">
                <header class="border-bottom lh-1 py-3">
                    <div
                        class="row flex-nowrap justify-content-between align-items-center">
                        <div class="col-4 ">
                            <a
                                class="blog-header-logo text-body-emphasis text-decoration-none"
                                href="#">
                                <img height="48px"
                                    src="{{ asset('assets/aulab-logo.svg') }}">
                            </a>
                        </div>
                        <div
                            class="col-4 d-flex justify-content-end align-items-center">
                            @guest    
                            <a class="btn btn-sm btn-outline-secondary mx-2" href=" {{ route('register') }}">Registrati</a>
                            <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('login') }}">Entra</a>
                            @else
                            <span>Benvenuto, {{Auth::user()->name}}</span>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-secondary mx-2">Logout</button>
                            </form>
                            @endguest
                        </div>
                    </div>
                </header>

                <div class="nav-scroller py-1 mb-3 border-bottom">
                    <nav class="nav nav-underline justify-content-between">
                        <a class="nav-item nav-link link-body-emphasis active"
                            href="#">World</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">U.S.</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Technology</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Design</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Culture</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Business</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Politics</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Opinion</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Science</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Health</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Style</a>
                        <a class="nav-item nav-link link-body-emphasis"
                            href="#">Travel</a>
                    </nav>
                </div>
            </div>
            <main>

              {{ $slot }}

            </main>
                <footer
                    class="footer py-5 mt-auto text-center text-body-secondary bg-body-tertiary">
                    <p>Copyright</p>
                </footer>
            </body>

        </html>