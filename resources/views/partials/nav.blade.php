<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/articles">Articles</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tags <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="divider"></li>
            @foreach($tags as $i => $value )
              <li><a href="{{url('/tags',$tags[$i])}}">{{$tags[$i]}}</a></li>
              <li class="divider"></li>
            @endforeach
          </ul>
        </li>
        <li>

        <li>{!! link_to_action('ArticlesController@show', $latest->title, [$latest->id]) !!}</li>
        <li><a href="/articles/create">Create </a></li>
        @if (isset($edit))
          <li><a href="/articles/{{$article->id}}/edit">Edit </a></li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li class="active"><a href="#">{{Auth::user()->name}}</a></li>
          <li><a href="/auth/logout">Logout</a></li>
        @else
          <li><a href="/auth/login">Login</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
