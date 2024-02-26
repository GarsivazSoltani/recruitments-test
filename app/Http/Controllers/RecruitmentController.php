<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecruitmentController extends Controller
{
    public function index()
    {
        // $recruitments = DB::table('recruitments')->get();
        $recruitments = Recruitment::all();
        return view('recruitment.index', compact('recruitments'));
    }

    public function show($id)
    {
        // $recruitment = DB::table('recruitments')->find($id);
        $recruitment = Recruitment::find($id);
        return view('recruitment.show', compact('recruitment'));
    }

    public function create()
    {
        return view('recruitment.create');
    }

    public function store(Request $request)
    {
        // $testName = $request->testName;
        // $experience = $request->experience;
        // $testConditions = $request->testConditions;

        // DB::table('recruitments')->insert([
        //     'title' => $testName,
        //     'total' => $experience,
        //     'eligibility' => $testConditions
        // ]);

        $recruitment = new Recruitment();
        $recruitment->title = $request->testName;
        $recruitment->total = $request->experience;
        $recruitment->eligibility = $request->testConditions;
        $recruitment->save();

        return back();
    }

    public function edit($id)
    {
        // $recruitment = DB::table('recruitments')->find($id);
        $recruitment = Recruitment::find($id);
        return view('recruitment.edit', compact('recruitment'));
    }

    public function update(Request $request, $id)
    {
        // $testName = $request->testName;
        // $experience = $request->experience;
        // $testConditions = $request->testConditions;

        // DB::table('recruitments')->where('id', $id)->update([
        //     'title' => $testName,
        //     'total' => $experience,
        //     'eligibility' => $testConditions
        // ]);

        $recruitment = Recruitment::find($id);
        $recruitment->title = $request->testName;
        $recruitment->total = $request->experience;
        $recruitment->eligibility = $request->testConditions;
        $recruitment->save();

        return redirect('recruitment');
    }

    public function destroy($id)
    {
        // DB::table('recruitments')->where('id', $id)->delete();
        Recruitment::find($id)->delete();
        return back();
    }

    public function storeConditions(Request $request, $recruitmentId)
    {
        $recruitment = Recruitment::find($recruitmentId);
        // dd($request);
        $recruitment->conditions()->create([
            'job_title' => $request->careerField, // عنوان شغلی
            'field_of_study' => $request->field, // رشته تحصیلی
            'orientation' => $request->orientation, // گرایش
            'grade' => $request->grade, // مقطع تحصیلی
            'state' => $request->state, // استان
            'city' => $request->city, // شهر
            'capacity' => Array($request->capacity) // ظرفیت
        ]);
        $recruitment->save();
        return back();
    }
}
