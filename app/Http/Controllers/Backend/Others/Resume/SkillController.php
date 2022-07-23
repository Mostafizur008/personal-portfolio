<?php

namespace App\Http\Controllers\Backend\Others\Resume;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others\Resume\Skill;
use App\Models\Others\Resume\Skill\Design;
use App\Models\Others\Resume\Skill\Lenguage;
use App\Models\Others\Resume\Skill\Basic;

class SkillController extends Controller
{
    public function View()
    {
        $data ['allData'] = Skill::all();
        $data ['dg'] = Design::all();
        $data ['lg'] = Lenguage::all();
        $data ['bk'] = Basic::all();
        return view('backend.main-section.page.others.resume.skill.view',$data);
    }

    public function Add()
    {
        return view('backend.main-section.page.others.resume.skill.add');
    }

    public function Store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'dname' => 'required',
            'lname' => 'required',
            'bname' => 'required',
        ]);

        $countClass = count($request->name);
        if ($countClass !=NULL)
        {
            for ($i=0; $i <$countClass ; $i++)
            {
            $rs = new Skill();
            $rs->name = $request->name[$i];
            $rs->parsent = $request->parsent[$i];
            $rs->save();
            }
          }

          $countClass = count($request->dname);
          if ($countClass !=NULL)
          {
              for ($i=0; $i <$countClass ; $i++)
              {
              $rs = new Design();
              $rs->dname = $request->dname[$i];
              $rs->dparsent = $request->dparsent[$i];
              $rs->save();
              }
            }

            $countClass = count($request->lname);
            if ($countClass !=NULL)
            {
                for ($i=0; $i <$countClass ; $i++)
                {
                $rs = new Lenguage();
                $rs->lname = $request->lname[$i];
                $rs->lparsent = $request->lparsent[$i];
                $rs->save();
                }
              }

              $countClass = count($request->bname);
              if ($countClass !=NULL)
              {
                  for ($i=0; $i <$countClass ; $i++)
                  {
                  $rs = new Basic();
                  $rs->bname = $request->bname[$i];
                  $rs->save();
                  }
                }

            $notification = array(
                'message' => 'Skill Add Successfully',
                'alert-type' => 'info'
            );

        return redirect()->route('sk.view')->with($notification);
    }

    public function Edit($id)
    {
        $data ['sk'] = Skill::find($id);
        return view('backend.main-section.page.others.resume.skill.edit',$data);
    }

    public function Update(Request $request,$id)
    {
            $rs = Skill::find($id);
            $rs->name = $request->name;
            $rs->parsent = $request->parsent;
            $rs->save();
            $notification = array(
                'message' => 'Education Update Successfully',
                'alert-type' => 'info'
            );

        return redirect()->route('ed.view')->with($notification);
    }

    public function Delete($id)
    {
        $works = Skill::find($id);
        $works->delete();
        $notification = array(
            'message' => 'Skill Delete Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('sk.view')->with($notification);
    }
}
