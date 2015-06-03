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

    <script src="/js/all.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

    <script type="text/javascript">
      // for edit only
      $('#editArticlebtn').click(function(){
        bootbox.confirm("Are you sure?", function(result) {
            if(result){
              $('#editArticle').submit();
            }
          }
        )
        return false;
       });

    </script>

    @yield('footer')
</body>
</html>
