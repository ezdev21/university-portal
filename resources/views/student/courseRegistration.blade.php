@extends('layouts.student-app')
@section('content')
  <h2>course Registration</h2>
  <div>
      <p><a href="{{route('student.course.register.submit',$student->id)}}"></a></p>
  </div>  
@endsection