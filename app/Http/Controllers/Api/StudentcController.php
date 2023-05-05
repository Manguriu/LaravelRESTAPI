<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentC;


class StudentcController extends Controller
{
    public function Index(){
        $student = StudentC::latest()->get();
        return response()->json($student);


    }


    public function Store (Request $request){
        $validateData = $request->validate([
            'class_name' => 'required|unique:student_c_s|max:25',
        ]);

        StudentC::insert([
            'class_name' => $request ->class_name,
        ]);


        return response('Class inserted ');


    }
    public function Edit($id){
        $data = StudentC::findOrFail($id);
        return response()->json($data);

    }


    public function Update(Request $request ,$id){
        $validateData = $request->validate([
            'class_name' => 'required|unique:student_c_s|max:25',
        ]);

        StudentC::findOrFail($id)->update([
        'class_name' => $request ->class_name,
        ]);

        return response('Class updated');

    }


    public function Delete($id){
        StudentC::findOrFail($id)->delete();
        return response('Class deleted');
    }
}
