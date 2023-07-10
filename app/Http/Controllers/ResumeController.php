<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    function page(Request $request)
    {
        return view('pages.resume');
    }

    function resumeLink(Request $request)
    {
        return DB::table('resumes')->first();
    }
    function experiencesData(Request $request)
    {
        return DB::table('experiences')->first();
    }
    function educationData(Request $request)
    {
        return DB::table('educations')->first();
    }
    function skillsData(Request $request)
    {
        return DB::table('skills')->first();
    }
    function languageData(Request $request)
    {
        return DB::table('languages')->first();
    }
}
