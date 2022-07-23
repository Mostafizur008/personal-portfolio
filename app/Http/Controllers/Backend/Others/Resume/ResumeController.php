<?php

namespace App\Http\Controllers\Backend\Others\Resume;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others\Resume\Resume;

class ResumeController extends Controller
{
    public function View()
    {
        $data ['allData'] = Resume::all();
        return view('backend.main-section.page.others.resume.view',$data);
    }

    public function Add()
    {
        $data ['about'] = Resume::all();
        return view('backend.main-section.page.others.resume.add',$data);
    }

    public function Store(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required',
            'designation' => 'required',
            'address' => 'required',
            'sdate' => 'required',
        ]);

            $rs = new Resume();
            $rs->company = $request->company;
            $rs->designation = $request->designation;
            $rs->address = $request->address;
            $rs->sdate = date('Y-m-d',strtotime($request->sdate));
            $rs->edate = $request->edate;
            $rs->status = $request->status;
            $rs->save();
            $notification = array(
                'message' => 'Experiance Add Successfully',
                'alert-type' => 'info'
            );

        return redirect()->route('resume.view')->with($notification);
    }

    public function Edit($id)
    {
        $data ['rs'] = Resume::find($id);
        return view('backend.main-section.page.others.resume.edit',$data);
    }

    public function Update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'company' => 'required',
            'designation' => 'required',
            'address' => 'required',
            'sdate' => 'required',
        ]);

            $rs = Resume::find($id);
            $rs->company = $request->company;
            $rs->designation = $request->designation;
            $rs->address = $request->address;
            $rs->sdate = $request->sdate;
            $rs->edate = $request->edate;
            $rs->status = $request->status;
            $rs->save();
            $notification = array(
                'message' => 'Experiance Update Successfully',
                'alert-type' => 'info'
            );

        return redirect()->route('resume.view')->with($notification);
    }

    public function Delete($id)
    {
        $works = Resume::find($id);
        $works->delete();
        $notification = array(
            'message' => 'Experieance Delete Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('resume.view')->with($notification);
    }
}
