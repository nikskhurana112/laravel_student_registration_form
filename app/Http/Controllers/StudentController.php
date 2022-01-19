<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function register(){

        return view("student.register");
    }

    public function doregister(Request $req){
        
        $req->validate([
            "first_name" => "required|max:255",
            "last_name" => "required|max:255",
            "email" => "required|max:60|unique:students,email|email",
            "mobile" => "required|max:10|unique:students,mobile",
            "address" => "required|max:255",
            "city" => "required|max:20",
            "state" => "required|max:20",
            "country" => "required|max:20",
            "postcode" => "required|max:10"
        ]);

        $data = $req->all();
        Student::create($data);
        session()->flash("success", "Thank you for Registration");
        return redirect()->back();
    }

    public function list(){

        $students = Student::latest()->paginate(10);
        return view("student.list")->with(["students" => $students]);
    }

    public function edit(Request $req){ 

        $student = Student::find($req->id);
        return view("student.edit")->with(['student' => $student]);
    }

    public function update(Request $req){

        $student = Student::find($req->id);

        $student->first_name = $req->first_name;
        $student->last_name = $req->last_name;
        $student->email = $req->email;
        $student->mobile = $req->mobile;
        $student->address = $req->address;
        $student->city = $req->city;
        $student->state = $req->state;
        $student->country = $req->country;
        $student->postcode = $req->postcode;

        $student->save();
        
        return redirect()->route("student.list"); 
    }


    public function confirmDelete(Request $req){
        $student = Student::find($req->id);
        return view("student.confirmDelete")->with(['student' => $student]);
    }
    
    public function delete(Request $req){

        Student::where('id', '=', $req->id)->delete();
        return redirect()->route("student.list");
    }
}

