@extends('appVue')

@section('content')
  <h1>Vue js</h1>
  <hr/>
  <div>
    <ul id="demo2">
      <li v-repeat="items" class="item-@{{$index}}">
        @{{$index}} - @{{parentMsg}} @{{childMsg}}
      </li>
    </ul>
  </div>

@stop
