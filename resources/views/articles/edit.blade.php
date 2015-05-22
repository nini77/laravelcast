@extends('app2')

@section('content')

  <h1>Edit: {!! $article->title !!}</h1>
  <hr/>
  {!! Form::model($article,['method' =>'PATCH','action'=>['ArticlesController@update',$article->id]]) !!}
    @include('articles.form',['submitClass' => 'btn btn-primary form-control','submitButtonText' => 'Update Article','readOnly' =>''])
  {!! Form::close() !!}

  @include('errors.list')

@stop
