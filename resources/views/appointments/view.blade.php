@extends('layouts.site-app')

@section('content')
<div class="container">
  <table>
    <thead>
      <td>id</td>
      <th>patientid</th>
      <th>appointmenttime</th>
      @can('app_manage')

      <th>action</th>@endcan
    </thead>
    @foreach($appointments as $appointment)
    <tr>
      <td>{{$appointment->id}}</td>
      <td>{{$appointment->user_id}}</td>
      <td>{{$appointment->appointmenttime}}</td>
      @can('app_manage')

      <td> <a href="appointment/{{$appointment->id}}">Edit</a><a href="{{route('delappointment',$appointment->id)}}">Delete</a> </td>
      @endcan
    </tr>
    @endforeach
  </table>
</div>
@endsection
