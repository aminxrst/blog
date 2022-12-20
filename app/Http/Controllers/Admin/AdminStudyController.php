<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminStudyController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Study/Index');
    }

    public function addStudy()
    {
        $cats = Category::all();
        return Inertia::render('Admin/Study/AddStudy', compact('cats'));
    }
}
