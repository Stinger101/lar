@extends('layouts.site-app')

@section('content')
<div class="container">
  <form class="" action="{{route('storeappointment')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="user" value="{{Auth::user()->id}}">
    <input type="datetime-local" name="time" value="">
    <input type="submit" name="submit" value="SUBMIT">
  </form>
</div>
@endsection
