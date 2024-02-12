<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Arrays;
use PhpParser\ErrorHandler\Collecting;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function registerTestForm()
    {
        return view('recruitments.register-test');
    }

    public function registerTest(Request $request)
    {
        // dd($request->all());
        // return view('recruitments.register-details', compact('citys'));

        // $request = $request->all();
        // return redirect()->refresh();
        // dd($request->all()['testName']);
        session()->put('reqAll', $request->all());
        // return redirect()->route('recruitments.register.details');
        return view('recruitments.register-details');
    }

    // public function registerDetailsForm()
    // {
    //     // dd($request->all());
    //     // return redirect()->refresh();
    //     return view('recruitments.register-details');
    // }

    public function registerDetails()
    {
        // dd($request->testName);
        // $request = $request->all();
        $citys = collect(['ostanname' => 'Tehran']);

        return view('recruitments.register-details');
        // dd($citys);
        // $citys = DB::table('ct3')
        //         ->select('ostanname')
        //         ->groupBy('ostanname')
        //         // ->orderBy('ostanname')
        //         ->get();
        // return view('recruitments.register-details', compact('citys'));
    }
}
