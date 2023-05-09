<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function home()
    {
        
        $result = [];

        for ($i=1; $i <= 3; $i++) {
            $calibers = Product::where('caliber_id', $i)->get();
            $quantity = 0;
        
            foreach ($calibers as $caliber) {
                $quantity = $caliber->quantity + $quantity;
            }
        
            $result[] = $quantity;
        }
        $caliber_id = [1, 2 , 3];

        return view('product.index', compact('caliber_id', 'result'));

    }
}
