<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    function index(){
        // using the Course model to interact with the course table
        $courses= Course::all();
       // echo $courses;
        return view("course.index", ["courses" => $courses]);
    }
    function show($id){
         $course=Course::findOrFail($id);
        return view("course.show", ["course" => $course]);
    }
    function create(){
        return view("course.create");
    }
    function store(){
        $name= request("name");    
        $code= request("code"); 
        $credit= request("credit");
        $cat= request("cat");
        
        //error_log($name);
        $course= new Course();
        $course->name= $name;
        $course->code= $code;
        $course->credit= $credit;
        $course->courseCategory= $cat;
        $course->save();
        return redirect("/");
    }
    function destroy($id){
        $course= Course::findOrFail($id);
        $course->delete($id);
        return redirect("/courses");
    }

}
