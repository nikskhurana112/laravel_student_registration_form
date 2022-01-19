@extends('layout')

@section('title', 'Delete Student')

@section('content')

<div class="container">
  <h1 class="p-3">Are you sure you want to delete student {{$student->first_name}} {{$student->last_name}}?</h1>
  <form action="{{route("student.delete")}}" method="POST" enctype="multipart/form">
    {{csrf_field()}}
    <div><input type="hidden" name="id" value="{{$student->id}}"></div>
    <button class="btn btn-danger m-3">Yes, Delete</button>
  </form>
  <form action="{{route("student.list")}}">
    <button class="btn btn-primary m-3">Discard</button>
  </form>
</div>

@endsection