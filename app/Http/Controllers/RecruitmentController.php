<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecruitmentController extends Controller
{
    public function index()
    {
        $recruitments = DB::table('recruitments')->get();
        return view('job.index', compact('recruitments'));
    }

    public function show()
    {

    }

    public function create()
    {
        return view('job.create');
    }

    public function store(Request $request)
    {
        $testName = $request->testName;
        $experience = $request->experience;
        $testConditions = $request->testConditions;

        // dd($request);
        DB::table('recruitments')->insert([
            'title' => $testName,
            'total' => $experience,
            'eligibility' => $testConditions
        ]);

        return back();
    }

    public function edit($id)
    {
        $recruitment = DB::table('recruitments')->find($id);
        return view('job.edit', compact('recruitment'));
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
