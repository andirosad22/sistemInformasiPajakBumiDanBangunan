<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>SPPBD | Dashboard | {{ auth()->user()->name }}</title>

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
    {{-- mycss --}}
    <link rel="stylesheet" href="/css/mycss/style.css">
    {{-- bootstrap icons --}}
    <link href="/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    {{-- dashboard css --}}
    <link href="/css/dashboard/dashboard.css" rel="stylesheet">
    {{-- sidebar css --}}
    <link href="/css/sidebar_css/sidebars.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
@include('dashboard.partials.header')


<div class="container-fluid">
  <div class="row">
@include('sweetalert::alert')
    <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
@include('dashboard.partials.sidebar')
    </nav>
    <main class="col-lg-9 ms-sm-auto flex-column col-lg-10 px-md-4">
@yield('container')
</main>
<footer>
  <h2>rosd andi pratama</h2>
</footer>
  </div>
</div>


<script src="/js/bootstrap/bootstrap.js"></script>
<script src="/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/js/ajax/script.js"></script>
<script src="/js/matauang/matauang.js"></script>
<script src="/js/sidebar_js/sidebars.js"></script>
  </body>
</html>