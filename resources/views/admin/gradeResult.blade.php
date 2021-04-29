@extends('layouts.student-app')
@section('content')
 <p>Student Grade Result</p>
 @forelse ($student->courses as $course)
     <table>
         <thead>
         <td>course title</td>
         <td>grade</td>
         </thead>
         <tbody>
          <td>{{$course->title}}</td>
          <td>{{$course->score}}</td>
         </tbody>
     </table>
 @empty
     <p>you don't have registered courses in this semester</p>
 @endforelse  
@endsection