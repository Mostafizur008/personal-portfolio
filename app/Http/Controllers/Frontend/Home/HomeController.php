<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others\Work\Work;
use App\Models\Others\Resume\Resume;
use App\Models\Others\Resume\Education;
use App\Models\Others\Resume\Skill;
use App\Models\Others\Resume\Skill\Design;
use App\Models\Others\Resume\Skill\Lenguage;
use App\Models\Others\Resume\Skill\Basic;

class HomeController extends Controller
{
    public function Home()
    {
        $data ['allWork'] = Work::get();
        $data ['allData'] = Resume::get();
        $data ['ed'] = Education::get();
        $data ['cd'] = Skill::get();
        $data ['dg'] = Design::get();
        $data ['lg'] = Lenguage::get();
        $data ['bk'] = Basic::get();
        return view('frontend.body.index',$data);
    }
}
