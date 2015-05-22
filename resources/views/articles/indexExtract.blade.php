@foreach ($articles as $article)
  <article >
    <h2><a href="{{ url('/articles',$article->id) }}">{{$article->title}}</h2></a>
    <div class="body">{{$article->body}}</div>
  </article>
@endforeach

{!!$articles->render()!!}
<hr/>
