@extends('layout')

@section('title', 'Students List')

@section('content')

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Country</th>
        <th scope="col">Postcode</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <th scope="row">{{$student->id}}</th>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->mobile}}</td>
        <td>{{$student->address}}</td>
        <td>{{$student->city}}</td>
        <td>{{$student->state}}</td>
        <td>{{$student->country}}</td>
        <td>{{$student->postcode}}</td>
        <td>
          <a href="{{route("student.edit", ['id' => $student])}}" class="btn btn-secondary btn-sm">Edit</a>
        </td>
        <td>
          <a href="{{route("student.confirmDelete", ['id' => $student])}}" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$students->links()}}
</div>

@endsection