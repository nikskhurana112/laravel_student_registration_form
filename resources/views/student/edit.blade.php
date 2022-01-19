@extends('layout')

@section('title', 'Edit Student Information')

@section('content')

<div class="container">

  <h1>Student Registration Form</h1>

  <form action="{{route("student.update")}}" method="POST" enctype=multipart/form-data>
    {{csrf_field()}}
    <div class="card">
      <div class="card-body">
        @include("inc.errors")
        <div class="row">

          <div class="col-md-6 pt-3">
           <div class="form-group">
             <label for="">First Name</label>
             <input type="text" name="first_name" class="form-control" value="{{$student->first_name}}" required placeholder="Enter your first name">
           </div>
          </div>
         
         <div class="col-md-6 pt-3">
           <div class="form-group">
             <label for="">Last Name</label>
             <input type="text" name="last_name" class="form-control" value="{{$student->last_name}}" required placeholder="Enter your last name">
           </div>
         </div>
     
         <div class="col-md-6 pt-3">
           <div class="form-group">
             <label for="">Email Address</label>
             <input type="text" name="email" class="form-control" value="{{$student->email}}" required placeholder="Enter your email ID">
           </div>
         </div>
     
         <div class="col-md-6 pt-3">
           <div class="form-group">
             <label for="">Mobile Number</label>
             <input type="text" name="mobile" class="form-control" value="{{$student->mobile}}" required placeholder="Enter your Mobile Number">
           </div>
         </div>
     
         <div class="col-md-12 pt-3">
           <div class="form-group">
             <label for="">Address</label>
             <input type="text" name="address" class="form-control" value="{{$student->address}}" required placeholder="Enter your Address">
           </div>
         </div>
     
         <div class="col-md-3 pt-3">
           <div class="form-group">
             <label for="">City</label>
             <input type="text" name="city" class="form-control" value="{{$student->city}}" required placeholder="Enter your City">
           </div>
         </div>
     
         <div class="col-md-3 pt-3">
           <div class="form-group">
             <label for="">State</label>
             <input type="text" name="state" class="form-control" value="{{$student->state}}" required placeholder="Enter your State">
           </div>
         </div>
     
         <div class="col-md-3 pt-3">
           <div class="form-group">
             <label for="">Country</label>
             <input type="text" name="country" class="form-control" value="{{$student->country}}" required placeholder="Enter your Country">
           </div>
         </div>
     
         <div class="col-md-3 pt-3" >
           <div class="form-group">
             <label for="">Postal Code</label>
             <input type="text" name="postcode" class="form-control" value="{{$student->postcode}}" required placeholder="Enter your Postcode">
           </div>
         </div>
         <div><input type="hidden" name="id" value="{{$student->id}}"></div>
         <div class="col-md-12 pt-4">
           <div class="form-group">
             <button class="btn btn-primary">Submit</button>
           </div>
         </div>
       </div>
      </div>
    </div>
  </form>
</div>

@endsection