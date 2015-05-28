<!DOCTYPE html>
<html>
  <head>
    <meta chrset="UTF-8">
    <title>Laravel</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/all.css" >
  </head>

<body>
  @include('partials.nav')

  <div class="container">
    @include('flash::message')


    @yield('content')

  </div>
    {{-- // <script> --}}
        {{-- // $('#flash-overlay-modal').modal(); --}}
        {{-- // $('div.alert').not('.alert-important').delay(3000).slideUp(300); --}}
    {{-- </script> --}}

    <script src="/js/all.js"></script>

    <!-- for vue.js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.10/vue.min.js"></script>
    <script src="/js/vueSam.js"></script>
    <script src="/js/vueSam2.js"></script>
    <script src="/js/inputbind.js"></script>
    <script src="/js/renderingList.js"></script>
    <script src="/js/eventSystem.js"></script>
    @yield('footer')
</body>
</html>
