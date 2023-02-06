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
        $category = Category::where('isDelete', false)->get();
        $data = Product::all()->toArray();
        return view("admin/product/index", [
            "data" => $data,
            "category" => $category
        ]);
    }

    public function add()
    {
        $category = Category::where('isDelete', false)->get();
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
        $category = Category::where('isDelete', false)->get();
        return view("admin/product/show", [
            "data" => $product,
            "category" => $category
        ]);
    }

    public function edit($slug)
    {
        try {
            $product = Product::where('slug', $slug)->first()->toArray();
            $category = Category::where('isDelete', false)->get();
        } catch (\Throwable $th) {
            return redirect("/admin/product");
        }
        return view("admin/product/edit", [
            "data" => $product,
            "category" => $category
        ]);
    }

    public function update(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();
        $IimageThumbnail = $product->thumbnail;
        $arrayImageProduct = json_decode($product->image);
        $slug = Str::slug($request['name']);

        if ($request->file('thumbnail')) {
            $request->validate([
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $image_path = public_path('images/') . $product->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $IimageThumbnail = "product/" . $slug . "_" . date('YmdH') . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $request->thumbnail->move(public_path('images/product/'), $IimageThumbnail);
        }
        if ($request->file('imageProduct')) {
            $request->validate([
                'imageProduct' => 'required|array',
                'imageProduct.*' => 'image|mimes:jpeg,png,jpg|max:2048'
            ]);
            foreach (json_decode($product->image) as $key => $rowImage) {
                $image_path_arry = public_path('images/') . $rowImage;
                if (File::exists($image_path_arry)) {
                    File::delete($image_path_arry);
                }
            }
            $arrayImageProduct = [];
            foreach ($request->file('imageProduct') as $key => $imageProduct) {
                $namaImage = $slug . "_" . date('YmdH') . '-' . $key . '.' . $imageProduct->getClientOriginalExtension();
                $imageProduct->move(public_path('images/product/'), $namaImage);
                $arrayImageProduct[] = "product/" . $namaImage;
            }
        }

        Product::where('id', $product->id)
            ->update([
                "slug" => $slug,
                "category" => $request['category'],
                "name" => $request['name'],
                "subtitle" => $request['subtitle'],
                "thumbnail" => $IimageThumbnail,
                "image" => json_encode($arrayImageProduct),
                "description" => $request['description'],
            ]);
        return redirect("/admin/product")->with('massage', 'Product Update success');
    }
}
