<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCaliberRequest;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Caliber;

class CaliberController extends Controller
{
    public function home()
    {
        $calibers = Caliber::paginate(25);
        return view('caliber.index', compact("calibers"));
    }

    public function create(Request $request)
    {
        $caliber = new Caliber();
        $caliber->name = $request->get('name');
        $caliber->save();

        return redirect()->route('caliber.index');
    }

    public function edit(int $caliberId)
    {
        $caliber = Caliber::find($caliberId);

        return view('caliber.edit', compact("caliber"));
    }

    public function update(UpdateCaliberRequest $request, int $caliberId)
    {
        Caliber::findOrFail($caliberId)->update($request->validated());

        return redirect()->route("caliber.index");
    }

    public function destroy(int $caliberId)
    {
        Product::where('caliber_id', $caliberId)->delete();
        Caliber::destroy($caliberId);

        return redirect()->route("caliber.index");
    }
}
