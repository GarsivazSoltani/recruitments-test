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
        // dd('Garsi');
        // $dataForm = $request->all();
        return view('recruitments.register-test');
    }

    public function registerTest(Request $request)
    {
        // $request = $request->all();
        // return redirect()->refresh();
        // dd($request->all()['testName']);
        dd('Garsi');
        dd($request->all());
        $dataForm = $request->all();
        session()->put('reqAll', $request->all());
        // $citys = DB::table('ct3')
        //         ->select('ostanname')
        //         ->groupBy('ostanname')
        //         // ->orderBy('ostanname')
        //         ->get();
        // return view('recruitments.register-details', compact('citys'));
        return view('recruitments.register-details', compact('dataForm'));
    }

    public function registerDetailsForm(Request $request)
    {
        dd($request->all());
        // return redirect()->refresh();
        return view('recruitments.register-details');
    }

    public function registerDetails()
    {
        // dd($request->testName);
        // $request = $request->all();

        // $citys = collect(['ostanname' => 'Tehran']);

        return view('recruitments.register-details');

        // $citys = DB::table('ct3')
        //         ->select('ostanname')
        //         ->groupBy('ostanname')
        //         // ->orderBy('ostanname')
        //         ->get();
        // return view('recruitments.register-details', compact('citys'));
    }
}
