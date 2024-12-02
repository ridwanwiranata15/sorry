
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    @include('partials.header')
    <title>@yield('title')</title>

    @include('partials.style')

    <!-- Custom styles for this template -->
    <link href="{{asset('css/sidebars.css')}}" rel="stylesheet">
  </head>
  <body>
    
<main class="d-flex flex-nowrap">
  <h1 class="visually-hidden">Sidebars examples</h1>

 @include('partials.sidebar')

  <div class="b-example-divider b-example-vr"></div>

  @yield('content')
</main>
    @include('partials.script')
</body>
</html>
