<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        if (session('massage')) {
            toastr()->success(session('massage'));
        }
        $data = Gallery::all()->toArray();
        return view("admin/gallery/index", ["data" => $data]);
    }

    public function add()
    {
        return view("admin/gallery/add");
    }

    public function save(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        if (!$request['name']) {
            $request['name'] = explode(".", $request->file('image')->getClientOriginalName())[0];
        }

        $namaImage = $request['name'] . "_" . date('YmdH') . '.' . $request->file('image')->getClientOriginalExtension();
        $request->image->move(public_path('images/gallery/'), $namaImage);
        Gallery::create([
            "name" => $request['name'],
            "slug" => Str::slug($request['name']),
            "image" => "gallery/" . $namaImage,
            "columns" => $request['columns'],
        ]);
        return redirect("/admin/gallery")->with('massage', 'Gallery Created success');
    }

    public function edit($slug)
    {
        dd($slug);
    }
}
