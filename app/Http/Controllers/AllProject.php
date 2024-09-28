<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AllProject extends BaseController
{
    public function showProjects()
    {
        return view('all_project'); // Ganti dengan nama tampilan Blade yang sesuai
    }
}
