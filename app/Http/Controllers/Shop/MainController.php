<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index',compact('products'));
    }
    public function product(Request $request)
    {
        $product = Product::find($request->id);
        $products = Product::all();

        return view('shop.product',compact('product', 'products'));
    }
    public function viewByCategory(Request $request)
    {
        $products = Product::where('category_id', $request->id)->get();
        $category = Category::find($request->id);
        return view('shop.category',compact('products','category'));
    }

}
