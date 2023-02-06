<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('index', ["title" => "home"]);
    }

    public function home()
    {
        return view('home');
    }

    public function product()
    {
        $category = Category::all()->toArray();
        $data = Product::all()->toArray();
        return view('product', [
            "data" => $data,
            "category" => $category
        ]);
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function gallery()
    {
        return view('gallery', ["data" => Gallery::all()->toArray()]);
    }

    public function inquiry()
    {
        return view('inquiry');
    }

    public function faq()
    {
        $data = Faq::all()->toArray();
        return view('faq', ["data" => $data]);
    }
}
