<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    {{-- mycss --}}
    <link rel="stylesheet" href="/css/mycss/style.css">
    {{-- bootstrap icons --}}
    <link href="/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <title>SPBB-Bangbayang | {{ $title }}</title>
</head>
<body>

    @include('partials.header')
    <div class="container" style="padding-top: 80px;">
    @yield('container')
    
    </div>
    @include('partials.footer')

    <script src="/js/bootstrap/bootstrap.js"></script>
    <script src="/js/ajax/script.js"></script>
</body>
</html>