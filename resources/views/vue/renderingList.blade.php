@extends('appVue')

@section('content')
  <h1>Vue js</h1>
  <p>
    v-model  renderingList
  </p>
  <hr/>
  <div id="demo4" class="container">

    {{-- both method ok! --}}
    {{-- <li v-repeat="names">@{{ $value }}</li> --}}
    <li v-repeat="name:names">@{{ name }}</li>
    {{-- <li v-repeat="name:names" v-text="name"></li> --}}
    {{-- <li v-repeat="name:names" >@{{5+2}}</li> --}}
    <br>
    <input type="text" placeholder="Add a new name" v-model="newName" v-on="blur: addName">
  </div>

@stop
