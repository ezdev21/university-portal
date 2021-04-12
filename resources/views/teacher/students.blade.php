@extends('layouts.teacher-app');
@section('content')
 <div>
  @forelse ($courses as $couse)
     @forelse ($course->students() as $student)
         <ul>
            <li>
             <img src="'/public/student'.{{$student->id}}" alt="photo" width="50px">
             <a href="{{route('student.profile',$student->id)}}">$student->name</a>
            </li>
         </ul>
     @empty
         <h2>there are no students taking this course</h2>
     @endforelse 
  @empty
      <h2>you don't have courses yet</h2>
  @endforelse    
 </div>   
@endsection