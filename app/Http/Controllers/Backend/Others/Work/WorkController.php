<?php

namespace App\Http\Controllers\Backend\Others\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others\Work\Work;
use App\Models\Others\About\About;

class WorkController extends Controller
{
    public function View()
    {
        $data ['allData'] = Work::all();
        return view('backend.main-section.page.others.work.view',$data);
    }

    public function Add()
    {
        $data ['about'] = About::all();
        return view('backend.main-section.page.others.work.add',$data);
    }

    public function Store(Request $request)
    {
            $works = new Work();
            $works->project = $request->project;
            $works->link = $request->link;
            $works->sdate = $request->sdate;
            $works->edate = $request->edate;
            $works->about_id = $request->about_id;
            $works->description = $request->description;
            if($request->file('image'))
            {
                $file = $request->file('image');
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('backend/all-images/database/work/'),$filename);
                $works['image'] = $filename;
            }
            $works->save();
            $notification = array(
                'message' => 'Project Add Successfully',
                'alert-type' => 'info'
            );

        return redirect()->route('work.view')->with($notification);
    }

    public function Edit($id)
    {
        $data ['about'] = About::all();
        $data ['wk'] = Work::find($id);
        return view('backend.main-section.page.others.work.edit',$data);
    }

    public function Update(Request $request,$id)
    {
            $works = Work::find($id);
            $works->project = $request->project;
            $works->link = $request->link;
            $works->sdate = $request->sdate;
            $works->edate = $request->edate;
            $works->about_id = $request->about_id;
            $works->description = $request->description;
            if($request->file('image'))
            {
                $file = $request->file('image');
                @unlink(public_path('backend/all-images/database/work/'.$works->image));
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('backend/all-images/database/work/'),$filename);
                $works['image'] = $filename;
            }
            $works->save();
            $notification = array(
                'message' => 'Project Update Successfully',
                'alert-type' => 'info'
            );

        return redirect()->route('work.view')->with($notification);
    }

    public function Delete($id)
    {
        $works = Work::find($id);
        $works->delete();
        $notification = array(
            'message' => 'Project Delete Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('work.view')->with($notification);
    }

}
