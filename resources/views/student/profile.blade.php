@extends('layouts.student-app')
@section('content')
    <div>
        <h3>Here is your profile Student</h3>
        <p><a href="{{route('student.profile.edit',$student->id)}}">Edit profile</a></p>    <img src="public/" alt="photo" width="100px">
        <p>name {{$student->name}}</p>
        <p>phone number {{$student->profile->phone_number}}</p>
        <p>address {{$student->profile->address}}</p>  
    </div>
@endsection