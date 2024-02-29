<?php

namespace App\Http\Controllers;

use App\Models\Conditions;
use App\Models\Province;
use App\Models\Work;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function edit($id)
    {
        $works = Work::all();
        $provinces = Province::all();
        $condition = Conditions::find($id);
        return view('conditions.edit', compact('condition', 'works', 'provinces'));
    }

    public function destroy($id)
    {
        return 'Delete: ' . $id;
    }
}
