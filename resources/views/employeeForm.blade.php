@extends('layouts.app')

@section('content')
<div class="container">
  <h1>NEW EMPLOYEE</h1>
  <form action="{{ route('employee.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="first_name">FIRST NAME</label>
        <br>
        <input type="text" name="first_name" value="">
    </div>

    <div class="form-group">
        <label for="last_name">LAST NAME</label>
        <br>
        <input type="text" name="last_name" value="">
    </div>
    <div class="form-group">
        <label for="date_of_birth">DATE OF BIRTH</label>
        <br>
        <input type="date" name="date_of_birth" value="">
    </div>
    <div class="form-group">
        <label for="personal_code">PERSONAL CODE</label>
        <br>
        <input type="text" name="personal_code" value="">
    </div>
    <div class="form-group">
        <label for="location_id">PLACE OF WORK</label>
        <br>
        <select name="location_id">
          @foreach ($locs as $loc)
            <option value="{{$loc -> id}}">
              {{$loc -> name}} - {{$loc -> city}}({{$loc -> country}})
            </option>
          @endforeach
        </select>
    </div>
    <br><br>
    <button type="submit">CREATE</button>
  </form>
</div>
@endsection
