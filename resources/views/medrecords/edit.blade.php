@extends('layouts.site-app')

@section('content')
<div class="container">
  <form class="" action="/medrecord/{{$medrecord->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <textarea type="text" name="record" value="">{{$medrecord->record}}</textarea>
    <input type="submit" name="submit" value="SUBMIT">
  </form>
</div>
@endsection
