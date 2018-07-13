@extends('layouts.site-app')

@section('content')
<div class="container">
  <form class="" action="{{route('storemedrecord')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="user" value="" placeholder="User id">
    <textarea type="text" name="record" value=""></textarea>
    <input type="submit" name="submit" value="SUBMIT">
  </form>
</div>
@endsection
