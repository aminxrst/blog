<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::query()->where('parent', 0)->get();
        return Inertia::render('Admin/Category/Index', compact('cats'));
    }

    public function addCategory()
    {
        $parent = Category::query()->where('parent', 0)->get();

        return Inertia::render('Admin/Category/AddCategory', compact('parent'));
    }

    public function create(Request $request)
    {

        $request->validate([
            'parentValue' => 'required',
            'category' => 'required'
        ]);

        $categoryInfo = Category::query()->where('title', $request->parentValue)->first();
        if (!$categoryInfo)
            return redirect()->back()->with(["errorMessage" => "دسته والد وجود ندارد"]);

        $childCategory = Category::query()->where('title', $request->category)->where('parent', $categoryInfo->id)->first();
        if ($childCategory)
            return redirect()->back()->with(["errorMessage" => "این دسته قبلا ثبت شده است"]);

        $data = [
          'title' => $request->category,
          'parent' => $categoryInfo->id
        ];

        Category::create($data);
        return redirect()->route('admin.category')->with(["message" => "با موفقیت افزوده شد"]);
    }

    public function childCategory($id)
    {
        $parent = Category::findOrFail($id);
        $children= Category::query()->where('parent', $id)->get();
        $data = [
            "children" => $children,
            "parent" => $parent
        ];
        return Inertia::render("Admin/Category/ChildCategory", compact('data'));
    }
}
