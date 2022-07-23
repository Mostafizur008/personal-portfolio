<?php

namespace App\Http\Controllers\Backend\Others\Resume;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others\Resume\Education;

class EducationController extends Controller
{
    public function View()
    {
        $data ['allData'] = Education::all();
        return view('backend.main-section.page.others.resume.education.view',$data);
    }

    public function Add()
    {
        $data ['ed'] = Education::all();
        return view('backend.main-section.page.others.resume.education.add',$data);
    }

    public function Store(Request $request)
    {
            $rs = new Education();
            $rs->type = $request->type;
            $rs->name = $request->name;
            $rs->description = $request->description;
            $rs->sdate = $request->sdate;
            $rs->point = $request->point;
            $rs->save();
            $notification = array(
                'message' => 'Education Add Successfully',
                'alert-type' => 'info'
            );

        return redirect()->route('ed.view')->with($notification);
    }

    public function Edit($id)
    {
        $data ['rs'] = Education::find($id);
        return view('backend.main-section.page.others.resume.education.edit',$data);
    }

    public function Update(Request $request,$id)
    {
            $rs = Education::find($id);
            $rs->type = $request->type;
            $rs->name = $request->name;
            $rs->description = $request->description;
            $rs->sdate = $request->sdate;
            $rs->point = $request->point;
            $rs->save();
            $notification = array(
                'message' => 'Education Update Successfully',
                'alert-type' => 'info'
            );

        return redirect()->route('ed.view')->with($notification);
    }

    public function Delete($id)
    {
        $works = Education::find($id);
        $works->delete();
        $notification = array(
            'message' => 'Education Delete Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('ed.view')->with($notification);
    }
}
