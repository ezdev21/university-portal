@extends('layouts.teacher-app')
@section('content')
    <div>
      <form action="{{route('teacher.profile.update',$teacher->id)}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <h2>Edit Your Profile Here Teacher</h2>
      <label for="name">name</label>
      <input type="text" name="name" value="{{$teacher->name}}"><br>
      <label for="phone_number">phone number</label>
      <input type="text" name="name" value="{{$teacher->profile->phone_number}}"><br>
      <label for="adress">adress</label>
      <input type="text" name="adress" value="{{$teacher->profile->address}}"><br>
      <input type="file" value="upload" accept="image/*"><br>
      <input type="submit" value="update profile">
      </form>
    </div>
@endsection