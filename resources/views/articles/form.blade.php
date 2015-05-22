
@if(isset($backTo))
<div class=" hidden">
@endif

<div class="form-group">
  {!! Form::label('title','Title:')!!}
  {!! Form::text('title',null,['class' => 'form-control',$readOnly ]) !!}
</div>

<div class="form-group">
  {!! Form::label('body','Body:') !!}
  {!! Form::textarea('body',null,['class' => 'form-control',$readOnly]) !!}
</div>

<div class="form-group">
  {!! Form::label('published_at','Publish On:') !!}
  {!! Form::input('date','published_at',$article->published_at,['class' => 'form-control',$readOnly]) !!}
</div>

@if(isset($dataTags))
  <div class="form-group hidden">
    {!! Form::label('tag_list','Tags:') !!}
    {!! Form::select('tag_list[]',$tags,null,['id' => 'tag_list','class' => 'form-control','multiple'])!!}
  </div>
  <div class="form-group">
    {!! Form::label('tag_list','Tags:') !!}
    {!! Form::text('tagView',$dataTags,['class' => 'form-control',$readOnly]) !!}
  </div>
@else
  <div class="form-group">
    {!! Form::label('tag_list','Tags:') !!}
    {!! Form::select('tag_list[]',$tags,null,['id' => 'tag_list','class' => 'form-control','multiple'])!!}
  </div>
@endif

@if(isset($backTo))
</div>
@endif

<div class="form-group">
  {!! Form::submit($submitButtonText,['class' => $submitClass ]) !!}
</div>



@section('footer')

<script type="text/javascript">
  $('#tag_list').select2();

</script>

@endsection
