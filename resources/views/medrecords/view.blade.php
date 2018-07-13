@extends('layouts.site-app')

@section('content')
<div class="container">
  <table>
    <thead>
      <td>id</td>
      <th>patientid</th>
      <th>appointmenttime</th>
      <th>action</th>
    </thead>
    @foreach($medrecords as $medrecord)
    <tr>
      <td>{{$medrecord->id}}</td>
      <td>{{$medrecord->patientid}}</td>
      <td>{{$medrecord->record}}</td>
      <td> <a href="medrecord/{{$medrecord->id}}">Edit</a><a href="{{route('delmedrecord',$medrecord->id)}}">Delete</a> </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection
