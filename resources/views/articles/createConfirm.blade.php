@extends('app2')

@section('content')
  <h1>New Article Confirm </h1>
  <hr/>
  {!! Form::model($article = new \App\Articles, ['method' => 'post','url' => 'articles' ]) !!}
      @include('articles.form',['submitClass' => 'btn btn-primary form-control','submitButtonText' => 'Add Article', 'readOnly' =>'readOnly'])
  {!! Form::close() !!}

  {!! Form::model($article = new \App\Articles, ['method' => 'get','url' => 'articles/create' ]) !!}
      @include('articles.form',['submitClass' => 'btn btn-warning form-control', 'submitButtonText' => 'Back', 'readOnly' =>'readOnly','backTo' => 'backTo'])
  {!! Form::close() !!}

  @include('errors.list')

@stop
