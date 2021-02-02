<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Drink;

class MainController extends Controller
{
    public function index() {
        $drinks = Drink::all();
        // dd($drinks);
        return view('pages.index-page', compact('drinks'));
    }

    public function show($id) {
        $drink = Drink::FindOrFail($id);
        return view('pages.show-page', compact('drink'));
    } 
}
