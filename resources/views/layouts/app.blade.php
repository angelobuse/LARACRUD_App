<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
      @include('inc.navbar')

        @if(!Auth::guest())
        @include('inc.sidebar') 
      <div id="wrapper">
      <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">  
                    <br>
                    <div class="container">
                      <br>
                        @include('inc.messages')
                        @yield('content')
                    </div>
                  </div>
                </div>
            </div>
        </div>
      <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    </div>
   @else
      <br>
      <br>
      <div class="container">
        <br>
          @include('inc.messages')
          @yield('content')
      </div>
    @endif
</body>
</html>
