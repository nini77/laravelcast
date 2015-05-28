@extends('appVue')

@section('content')
  <h1>Vue js</h1>
  <p>
    eventSystem
  </p>
  <hr/>
  <div id="demo5" class="container">
    <input type="text" v-on="
    keyup: onKeyUp | key enter,
    blur: onBlur">

  </div>

@stop
