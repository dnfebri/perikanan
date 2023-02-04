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
        Faq::create([
            "questions" => $request['questions'],
            "answer" => $request['answer'],
            "isActive" => true,
        ]);
        return redirect("/admin/faq")->with('massage', 'FAQ Created success');
    }

    public function edit($id)
    {
        $data = Faq::where("id", $id)->first()->toArray();
        if (!$data) {
            return redirect("admin/faq");
        }
        return view("admin/faq/edit", ["faq" => $data]);
    }

    public function update(Request $request, $id)
    {
        Faq::where('id', $id)
            ->update([
                "questions" => $request['questions'],
                "answer" => $request['answer'],
                "isActive" => $request['isActive'],
            ]);
        return redirect("/admin/faq")->with('massage', 'FAQ Updated success');
    }

    public function destroy(Request $request)
    {
        $faq = Faq::where('id', $request->id)->first();
        if (!$faq) {
            return redirect("/admin/faq");
        }
        Faq::where('id', $faq->id)->delete();
        return redirect("/admin/faq")->with('massage', 'FAQ Delete success');
    }
}
