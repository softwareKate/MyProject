<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index(){
        $classrooms = Classroom::all();
        return view('project.classroom.index', compact('classrooms'));
    }
}
