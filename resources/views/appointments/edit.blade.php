@extends('layouts.site-app')

@section('content')
<div class="container">
  <form class="" action="/appointment/{{$appointment->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <input type="datetime" name="time" value="{{$appointment->appointmenttime}}">
    <input type="submit" name="submit" value="SUBMIT">
  </form>
</div>
@endsection
