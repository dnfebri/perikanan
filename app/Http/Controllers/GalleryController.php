<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use File;
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

        $namaImage = Str::slug($request['name']) . "_" . date('YmdH') . '.' . $request->file('image')->getClientOriginalExtension();
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
        $gallery = Gallery::where('slug', $slug)->first()->toArray();
        return view("admin/gallery/edit", compact('gallery'));
    }

    public function update(Request $request)
    {
        $gallery = Gallery::where('id', $request->id)->first();
        if (!$gallery) {
            return redirect("/admin/gallery");
        }
        $image = $gallery->image;
        if ($request->file()) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);
            $image_path = public_path('images/') . $gallery->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $namaImage = Str::slug($request['name']) . "_" . date('YmdH') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/gallery/'), $namaImage);
            $image = "gallery/" . $namaImage;
        }


        Gallery::where('id', $gallery->id)
            ->update([
                "name" => $request['name'],
                "slug" => Str::slug($request['name']),
                "image" => $image,
                "columns" => $request['columns'],
            ]);
        return redirect("/admin/gallery")->with('massage', 'Gallery Updated success');
    }

    public function destroy(Request $request)
    {
        $gallery = Gallery::where('id', $request->id)->first();
        if (!$gallery) {
            return redirect("/admin/gallery");
        }
        Gallery::where('id', $gallery->id)->delete();
        return redirect("/admin/gallery")->with('massage', 'Gallery Delete success');
    }
}
