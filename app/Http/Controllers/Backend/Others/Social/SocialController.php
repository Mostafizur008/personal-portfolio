<?php

namespace App\Http\Controllers\Backend\Others\Social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others\Social\Social;

class SocialController extends Controller
{
    public function SocialView()
    {
        return view('backend.main-section.page.others.social.add')->with('socials',Social::first());
    }

    public function SocialUpdate(Request $request)
    {
            $socials = Social::first();
            $socials->facebook = $request->facebook;
            $socials->twitter = $request->twitter;
            $socials->github = $request->github;
            $socials->whatsapp = $request->whatsapp;
            $socials->save();

        return redirect()->route('social.view');
    }

}
