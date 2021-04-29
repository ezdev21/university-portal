@extends('layouts.student-app')
@section('content')
    <div>
      <form action="{{route('student.profile.update',$student->id)}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <h3>Edit Your Profile Here Student</h3>
      <label for="name">name</label>
      <input type="text" name="name" value="{{$student->name}}"><br>
      <label for="phone_number">phone number</label>
      <input type="text" name="phone_numbers" value="{{$student->profile->phone_number}}"><br>
      <label for="adress">adress</label>
      <input type="text" name="adress" value="{{$student->profile->address}}"><br>
      <input type="file" value="upload" accept="image/*"><br>
      <input type="submit" value="update profile">
      </form>
    </div>
@endsection