<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;

class MainController extends Controller
{
    public function index() {
        return view('pages.index-page');
    }
}
