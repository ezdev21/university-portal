@extends('layouts.teacher-app')
@section('content')
    <div>
        <h3>Here is your profile Teacher</h3>
        <p><a href="{{route('teacher.profile.edit',$teacher->id)}}">Edit profile</a></p>
        <img src="public/" alt="photo" width="100px">
        <p>name {{$teacher->name}}</p>
        <p>phone number {{$teacher->profile->phone_number}}</p>
        <p>address {{$teacher->profile->address}}</p>  
    </div>
@endsection