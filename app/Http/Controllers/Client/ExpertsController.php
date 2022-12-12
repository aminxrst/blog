<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Testing\Assert;

class ExpertsController extends Controller
{
    public function index()
    {
        return Inertia::render('Client/Expert/Experts');
    }
}
