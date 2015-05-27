@extends('appVue')

@section('content')
  <h1>Vue js</h1>
  <hr/>
  <div id="demo">
    <h1>@{{title | uppercase}}</h1>
    <ul>
      <li
        v-repeat="todos"
        v-on="click: done = !done"
        class="@{{done ? 'done' : ''}}">
        @{{content}}
      </li>
    </ul>
  </div>
@stop
