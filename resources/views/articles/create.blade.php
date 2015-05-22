@extends('app2')

@section('content')

  <h1>Write a New Article</h1>
  <hr/>
  {!! Form::model($article = new \App\Articles, ['method' => 'get','url' => 'articles/createConfirm']) !!}
    @include('articles.form',['submitClass' => 'btn btn-primary form-control','submitButtonText' => 'Confirm Article','readOnly' =>''])
  {!! Form::close() !!}

  @include('errors.list')

@stop
