@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{$emp -> first_name}} {{$emp -> last_name}} data:</h1>
      <ul>
        <li>Date of birth: {{$emp -> date_of_birth}} </li>
        @auth
        <li>Personal Code: {{$emp -> personal_code}} </li>
        @endauth
        <br>
        <li>Place of Work: {{$emp -> location -> name}} </li>
        <li>Address: {{$emp -> location -> street}} - {{$emp -> location -> city}}({{$emp -> location -> country}}) </li>
        <br>
      </ul>
      <br>
      @auth
        <a class ="btn btn-primary" href="{{ route('employee.edit', $emp -> id)}}">EDIT</a>
        <a class ="btn btn-danger" href="{{ route('employee.destroy', $emp -> id)}}">DELETE</a>
      @endauth

</div>
@endsection
