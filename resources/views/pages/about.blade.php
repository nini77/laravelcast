@extends('app2')

@section('content')

@if ($first == 'John')
  <h1>Hi John</h1>
@else
  <h1>Not John</h1>
@endif

  <h1>About Me: {{$first}} </h1>
  <p>
      Dolor minim aute dolore cillum pariatur consectetur veniam. Quis elit id amet qui mollit commodo ullamco dolore consectetur labore irure cillum aliqua veniam. Culpa do et aliqua do in excepteur ut adipisicing eu culpa amet magna velit Lorem. Aliqua velit ad in reprehenderit amet cillum ullamco amet fugiat sunt et ipsum id. Occaecat aliqua cupidatat dolor qui excepteur excepteur eu laborum. Consectetur ad laboris excepteur minim laboris magna anim deserunt. Irure sint duis dolor labore cillum duis esse occaecat laborum enim nostrud deserunt. Aliquip qui eiusmod ipsum excepteur excepteur cupidatat id dolore. Sunt tempor voluptate ad ullamco do do culpa mollit qui culpa.
  </p>
@stop
