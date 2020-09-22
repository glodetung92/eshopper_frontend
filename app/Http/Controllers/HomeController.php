<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();
        $sliders = Slider::latest()->get();
        $products = Product::latest()->take(6)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();

        return view('home.home', compact('sliders', 'categories', 'products', 'productsRecommend'));
    }

    public function test()
    {
        return view('test');
    }
}
