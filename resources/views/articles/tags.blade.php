@extends('app2')

@section('content')
  <h2>Synchro Articles &nbsp; &nbsp; TAG:{{$name}}</h2>
  <h2></h2>
  <hr/>
  @include('articles.indexExtract')
@stop
