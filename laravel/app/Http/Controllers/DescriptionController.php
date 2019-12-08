<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index() {
        return view('about.index');
    }
    public function page2() {
        return view('about.page2');
    }
}
