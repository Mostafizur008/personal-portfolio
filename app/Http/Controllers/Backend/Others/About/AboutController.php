<?php

namespace App\Http\Controllers\Backend\Others\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others\About\About;

class AboutController extends Controller
{
    public function View()
    {
        return view('backend.main-section.page.others.about.add')->with('abouts',About::first());
    }

    public function Update(Request $request)
    {
            $abouts = About::first();
            $abouts->name = $request->name;
            $abouts->fname = $request->fname;
            $abouts->mname = $request->mname;
            $abouts->gender = $request->gender;
            $abouts->dob = $request->dob;
            $abouts->mobile = $request->mobile;
            $abouts->m_status = $request->m_status;
            $abouts->pe_address = $request->pe_address;
            $abouts->per_address = $request->per_address;
            $abouts->blood = $request->blood;
            $abouts->nationality = $request->nationality;
            $abouts->religion = $request->religion;
            $abouts->nid = $request->nid;
            $abouts->about = $request->about;
            if($request->file('photo'))
            {
                $file = $request->file('photo');
                @unlink(public_path('backend/all-images/database/user/'.$abouts->photo));
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('backend/all-images/database/user/'),$filename);
                $abouts['photo'] = $filename;
            }
            $abouts->save();
            $notification = array(
                'message' => 'About Update Successfully',
                'alert-type' => 'info'
            );

        return redirect()->route('about.view')->with($notification);
    }
}
