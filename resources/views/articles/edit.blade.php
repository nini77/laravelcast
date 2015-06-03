@extends('app2')

@section('content')

  <h1>Edit: {!! $article->title !!}</h1>
  <hr/>
  {!! Form::model($article,['method' =>'PATCH','action'=>['ArticlesController@update',$article->id],'id'=> 'editArticle']) !!}
    @include('articles.form',['submitClass' => 'btn btn-primary form-control','submitButtonText' => 'Update Article','readOnly' =>'', 'id' => 'editArticlebtn'])
  {!! Form::close() !!}

  @include('errors.list')

@stop
