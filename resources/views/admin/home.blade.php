@extends('layouts.student-app')

@section('content')
<div>
    <aside>
        <a href="{{route('teacher.register')}}">add teacher</a>
        <a href="{{route('student.register')}}">add student</a>
    </aside>
    <div>{{$students->count()}}</div>
    <div>{{$teachers->count()}}</div>

</div>
@endsection
