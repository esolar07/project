<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eddie Solar - Web Developer</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

        <section class="l-pg-container">

            <header class="l-pg-header">
                @include('layouts.nav')
            </header>

            <main class="l-pg-body">
                @yield('content')
            </main>

            {{--<footer class="l-pg-footer">--}}
                {{--@include('layouts.footer')--}}
            {{--</footer>--}}

        </section>
    </body>
</html>