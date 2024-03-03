<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use App\Models\Recruitment;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecruitmentController extends Controller
{
    public function index()
    {
        // $recruitments = DB::table('recruitments')->get();
        $recruitments = Recruitment::paginate(3);
        return view('recruitment.index', compact('recruitments'));
    }

    public function show($id)
    {
        $works = Work::all();
        $provinces = Province::all();
        $cities = City::all();
        // $recruitment = DB::table('recruitments')->find($id);
        $recruitment = Recruitment::find($id);
        return view('recruitment.show', compact('recruitment', 'works', 'provinces', 'cities'));
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
        $capacityTotal = 0;
        // dd((int)$request->capacityAll);
        if (!(int)$request->capacityAll) {
            $capacityTotal = (int)$request->capacityWoman + (int)$request->capacityMan;
            // dd('nist');
        }else{
            $capacityTotal = (int)$request->capacityAll;
            // dd('hast');
        }


        $work = Work::find($request->careerField);
        $stateName = Province::find($request->state);
        $cityName = City::find($request->city);

        $recruitment->conditions()->create([
            'job_title' => $work->title, // عنوان شغلی
            'field_of_study' => $request->field, // رشته تحصیلی
            // 'orientation' => $request->orientation, // گرایش
            'grade' => $request->grade, // مقطع تحصیلی
            'state' => $stateName->name, // استان
            'city' => $cityName->name, // شهر
            'capacity' => Array($capacityTotal,(int)$request->capacityWoman,(int)$request->capacityMan), // ظرفیت
            'work_id' => $work->id
        ]);
        $recruitment->save();

        return back();
    }
}
