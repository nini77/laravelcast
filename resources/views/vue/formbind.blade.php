@extends('appVue')

@section('content')
  <h1>Vue js</h1>
  <p>
    v-model
  </p>
  <hr/>
  <div id="demo3" class="container">
    <input v-model="name">
    <pre>@{{$data | json }}</pre>
  </div>

@stop
