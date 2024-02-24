<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('job.index');
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
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
