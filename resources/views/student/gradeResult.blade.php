@extends('layouts.student-app')
@section('content')
 <h2>Student Grade Result</h2>
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