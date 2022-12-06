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
        return Inertia::render('Admin/Category/Index');
    }

    public function addCategory()
    {
        $parent = Category::query()->where('parent', 0)->get();

        return Inertia::render('Admin/Category/AddCategory', compact('parent'));
    }
}
