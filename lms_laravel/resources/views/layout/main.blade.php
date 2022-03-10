<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@stack('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
</head>

<body>

    @include('layout.drawer')


    <div class="section">
    @include('layout.header')
    <main>
        @yield('main-section')
        @include('layout.footer')
    </main>
    </div>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>
