<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return Inertia::render('Admin/Study/AddStudy');
    }
}
