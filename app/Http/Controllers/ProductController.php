<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        if (session('massage')) {
            toastr()->success(session('massage'));
        }
        $data = Product::all()->toArray();
        return view("admin/product/index", ["data" => $data]);
    }

    public function add()
    {
        $category = Category::all()->toArray();
        return view("admin/product/add", compact('category'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'imageProduct' => 'required|array',
            'imageProduct.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $arrayImageProduct = [];
        $slug = Str::slug($request['name']);
        $namaImageThumbnail = $slug . "_" . date('YmdH') . '.' . $request->file('thumbnail')->getClientOriginalExtension();
        $request->thumbnail->move(public_path('images/product/'), $namaImageThumbnail);
        foreach ($request->file('imageProduct') as $key => $imageProduct) {
            $namaImage = $slug . "_" . date('YmdH') . '-' . $key . '.' . $imageProduct->getClientOriginalExtension();
            $imageProduct->move(public_path('images/product/'), $namaImage);
            $arrayImageProduct[] = "product/" . $namaImage;
        }

        Product::create([
            "slug" => $slug,
            "category" => $request['category'],
            "name" => $request['name'],
            "subtitle" => $request['subtitle'],
            "thumbnail" => "product/" . $namaImageThumbnail,
            "image" => json_encode($arrayImageProduct),
            "description" => $request['description'],
        ]);
        return redirect("/admin/product")->with('massage', 'Product Created success');
    }

    public function show($slug)
    {
        try {
            $product = Product::where('slug', $slug)->first()->toArray();
        } catch (\Throwable $th) {
            return redirect("/admin/product");
        }
        dd($product);
    }
}
