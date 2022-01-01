@extends('layouts.student-app')

@section('content')
<div class="flex">
  <div>
      
  </div>
  <div class="">
    <h1 class="bg-primary text-white text-xl p-1">my profile</h1>
    <div>
      <div>
        <p>full name {{$student->name ?? 'name'}}</p>
        <p>id no {{$student->id ?? 'id'}}</p>
        <p>department {{$student->department->name ?? 'department'}}</p>
        <p>year {{$student->year ?? 'I'}}</p>  
      </div>
      <img src="" class="w-64">   
    </div>  
  </div>  
</div>
@endsection