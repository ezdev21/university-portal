@extends('layouts.teacher-app');
@section('content')
 <div>
  @forelse ($courses as $couse)
     <form action="{{route('teacher.grade.submit',$course->id)}}">
    {{ csrf_field() }}
    @forelse ($course->students() as $student)
        <h2>{{$course->name}}</h2>
         <ul>
             <li>$student->name</li>
             <input type="number" min="0" max="100" required>
         </ul>
         <input type="submit" value="grade">
     @empty
         <p>there are no students taking this course</p>
     @endforelse 
    </form>
  @empty
      <h2>you don't have courses yet</h2>
  @endforelse    
 </div>   
@endsection