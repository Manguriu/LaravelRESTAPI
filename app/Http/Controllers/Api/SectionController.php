<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use Carbon\Carbon;

class SectionController extends Controller
{
    public function Index(){
        $section = Section::latest()->get();
        return response()->json($section);

    }

   
    public function Edit($id){
        $section = Section::findOrFail($id);
        return response()->json($section);

    }

    public function Update(Request $request ,$id){
        $validateData = $request->validate([
            'class_id' => 'required',
            'section_name' => 'required|unique:sections|max:25',
        ]);

        
        Section::findOrFail($id)->update([
            'class_id' => $request ->class_id,
            'section_name' => $request ->section_name,
        ]);


        return response('Section updated');

    }

    public function Delete($id){
        Section::findOrFail($id)->delete();
        return response('Section deleted');
    }

}
