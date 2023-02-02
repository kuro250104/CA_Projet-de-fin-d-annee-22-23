<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Caliber;

class CaliberController extends Controller
{
    public function home()
    {
        $calibers = Caliber::all();
        return view('caliber.calibers', compact("calibers"));
    }
    public function create(Request $request)
    {
        $caliber = new Caliber();
        $caliber->name = $request->get('name');
        $caliber->save();

        return redirect()->route('caliber.calibers');
    }
}
