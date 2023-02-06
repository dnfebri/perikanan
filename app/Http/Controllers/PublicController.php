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
        $category = Category::where('isDelete', false)->get()->toArray();
        $data = Product::where('active', 1)->orderBy('id', 'DESC')->get()->toArray();
        return view('product', [
            "data" => $data,
            "category" => $category
        ]);
    }
    
    public function productShow($slug)
    {
        $data = Product::where('slug', $slug)->first()->toArray();
        $category = Category::where('isDelete', false)->get()->toArray();
        $productCategory = Product::where('category', $data['category'])->orderBy('id', 'DESC')->get()->toArray();
        if (!$data) {
            dd($data);
            return redirect("/product");
        }
        return view('product-show', [
            "data" => $data,
            "category" => $category,
            "productCategory" => $productCategory,
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
