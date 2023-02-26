<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('style.css') }}">
    <title> {{ $titlePage  }} Page  </title>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://kit.fontawesome.com/5f53d78495.css" crossorigin="anonymous">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    {{-- end google fonts --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="margin:0;">

    {{-- navbar --}}
    @include('partials.navbar')
   {{-- end navbar --}}

   {{-- main content --}}
   <div class="container-fluid">

    <div class="row">
      <div class="col">
        @yield('jumbotron')
      </div>
    </div>

    <div class="row">
      <div class="col">
        @yield('linkOS')
      </div>
    </div>

    <div class="row">
      <div class="col">
        @yield('container')
      </div>
    </div>

  </div>
   {{-- end main content --}}

   <footer class="container-fluid">
    @include('partials.footer')
   </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5f53d78495.js" crossorigin="anonymous"></script>
</body>
</html>
