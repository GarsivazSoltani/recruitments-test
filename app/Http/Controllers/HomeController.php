<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        // return redirect()->action('HomeController@registerDetails', ['$request' => $request->all()]);
        return redirect()->route('recruitments.register.details', [$request]);
    }

    public function registerDetails(Request $request)
    {
        // dd($request->testName);
        $req = $request->all();
        // dd($req);
        $citys = DB::table('ct3')
                ->select('ostanname')
                ->groupBy('ostanname')
                // ->orderBy('ostanname')
                ->get();
        return view('recruitments.register-details', compact('citys', 'req'));
    }
}
