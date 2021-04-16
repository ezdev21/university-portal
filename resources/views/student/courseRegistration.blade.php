@extends('layouts.student-app')
@section('content')
  <div>
    <p>course Registration</p>
    <div>
        <form action="{{route('student.course.register',$student->id)}}" method="post">
          @csrf
          @forelse ($student->courses as $course)
              <ul>
                <li>
                  <input type="checkbox">
                  <span>{{$course->title}}</span>
                </li>
              </ul>
          @empty
              <p>sorry you don't have courses to register in this semester</p>
          @endforelse
          <input type="submit" value="register">
        </form>
    </div>
    <div>
      @forelse ($student->courses as $course)
          <ul>
            <li>{{$course->title}}</li>
          </ul>
      @empty
          <p>status not registered for this semester</p>
      @endforelse
    </div>   
  </div> 
@endsection