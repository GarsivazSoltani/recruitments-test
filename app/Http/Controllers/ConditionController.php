<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Conditions;
use App\Models\Province;
use App\Models\Recruitment;
use App\Models\Work;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function show($id)
    {
        // $works = Work::all();
        // $provinces = Province::all();
        // $cities = City::all();
        // $recruitment = Recruitment::find($id);
        // return view('recruitment.show', compact('recruitment', 'works', 'provinces', 'cities'));

        return $id;
    }

    public function edit($id)
    {
        $works = Work::all();
        $provinces = Province::all();
        $cities = City::all();

        $condition = Conditions::find($id);
        return view('conditions.edit', compact('condition', 'works', 'provinces', 'cities'));

        // return 'Edit' . $id;
    }

    public function update(Request $request, $id)
    {
        $capacityTotal = 0;
        if (!(int)$request->capacityAll) {
            $capacityTotal = (int)$request->capacityWoman + (int)$request->capacityMan;
        }else{
            $capacityTotal = (int)$request->capacityAll;
        }


        $work = Work::find($request->careerField);
        $stateName = Province::find($request->state);
        $cityName = City::find($request->city);

        $condition = Conditions::find($id);
        $condition->job_title = $work->title; // عنوان شغلی
        $condition->field_of_study = $request->field; // رشته تحصیلی
        // $condition->orientation = $request->orientation; // گرایش
        $condition->grade = $request->grade; // مقطع تحصیلی
        $condition->state = $stateName->name; // استان
        $condition->city =  $cityName->name; // شهر
        $condition->capacity = Array($capacityTotal,(int)$request->capacityWoman,(int)$request->capacityMan); // ظرفیت
        $condition->save();

        return redirect('recruitment');
    }

    public function destroy($id)
    {
        // Recruitment::find($id)->delete();
        // return back();
        return 'Delete: ' . $id;
    }
}
