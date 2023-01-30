<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        if (session('massage')) {
            toastr()->success(session('massage'));
        }
        $data = Category::where('isDelete', false)->get();
        // dd($data);
        return view("admin/product/category", compact("data"));
    }

    public function save(Request $request)
    {
        Category::create([
            "name" => $request->category
        ]);

        return redirect("/admin/product/category")->with('massage', 'Category Created success');
    }

    public function update(Request $request)
    {
        Category::where('id', $request->id)
        ->update([
            'name' => $request->name,
        ]);
        return redirect("/admin/product/category")->with('massage', 'Category Updated success');
    }

    public function destroy(Request $request)
    {
        Category::where('id', $request->id)
        ->update([
            'isDelete' => true,
        ]);
        return redirect("/admin/product/category")->with('massage', 'Delete Category ' . $request->name);
    }
}
