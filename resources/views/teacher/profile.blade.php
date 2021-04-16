@extends('layouts.teacher-app')
@section('content')
    <div>
        <p>Here is your profile Teacher</p>
        <p><a href="{{route('teacher.profile.edit',$teacher->id)}}">Edit profile</a></p>
        <img src="public/" alt="photo" width="100px">
        <p>name {{$teacher->name}}</p>
        <p>phone number {{$teacher->profile->phone_number}}</p>
        <p>address {{$teacher->profile->address}}</p>  
    </div>
@endsection