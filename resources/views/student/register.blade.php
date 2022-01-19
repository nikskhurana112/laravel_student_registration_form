@extends('layout')

@section('title', 'Student Registratoin Form')

@section('content')

<div class="container">
  {{csrf_field()}}

  <h1>Student Registration Form</h1>

  <form action="{{route("student.doregister")}}" method="POST">
    {{csrf_field()}}
    <div class="card">
      <div class="card-body">
        @include("inc.errors")
        <div class="row">

          <div class="col-md-6 pt-3">
           <div class="form-group">
             <label for="">First Name</label>
             <input type="text" name="first_name" value="{{old("first_name")}}" class="form-control" required placeholder="Enter your first name">
           </div>
          </div>
         
         <div class="col-md-6 pt-3">
           <div class="form-group">
             <label for="">Last Name</label>
             <input type="text" name="last_name" value="{{old("last_name")}}" class="form-control" required placeholder="Enter your last name">
           </div>
         </div>
     
         <div class="col-md-6 pt-3">
           <div class="form-group">
             <label for="">Email Address</label>
             <input type="text" name="email" value="{{old("email")}}" class="form-control" required placeholder="Enter your email ID">
           </div>
         </div>
     
         <div class="col-md-6 pt-3">
           <div class="form-group">
             <label for="">Mobile Number</label>
             <input type="text" name="mobile" value="{{old("mobile")}}" class="form-control" required placeholder="Enter your Mobile Number">
           </div>
         </div>
     
         <div class="col-md-12 pt-3">
           <div class="form-group">
             <label for="">Address</label>
             <input type="text" name="address" value="{{old("address")}}" class="form-control" required placeholder="Enter your Address">
           </div>
         </div>
     
         <div class="col-md-3 pt-3">
           <div class="form-group">
             <label for="">City</label>
             <input type="text" name="city" value="{{old("city")}}" class="form-control" required placeholder="Enter your City">
           </div>
         </div>
     
         <div class="col-md-3 pt-3">
           <div class="form-group">
             <label for="">State</label>
             <input type="text" name="state" value="{{old("state")}}" class="form-control" required placeholder="Enter your State">
           </div>
         </div>
     
         <div class="col-md-3 pt-3">
           <div class="form-group">
             <label for="">Country</label>
             <input type="text" name="country" value="{{old("country")}}" class="form-control" required placeholder="Enter your Country">
           </div>
         </div>
     
         <div class="col-md-3 pt-3" >
           <div class="form-group">
             <label for="">Postal Code</label>
             <input type="text" name="postcode" value="{{old("postcode")}}" class="form-control" required placeholder="Enter your Postcode">
           </div>
         </div>
         <div class="col-md-12 pt-4">
           <div class="form-group">
             <button class="btn btn-primary">Register</button>
           </div>
         </div>
       </div>
      </div>
    </div>
  </form>
</div>

@endsection