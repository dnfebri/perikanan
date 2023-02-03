<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        if (session('massage')) {
            toastr()->success(session('massage'));
        }
        $data = Faq::all()->toArray();
        return view("admin/faq/index", ["data" => $data]);
    }

    public function save(Request $request)
    {
        dd($request);
    }
}
