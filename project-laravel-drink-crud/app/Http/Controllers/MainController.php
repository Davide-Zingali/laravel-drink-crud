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

    public function create() {
        return view('pages.create-page');
    }
    public function store(request $request) {
        // dd($request -> all());
        Drink::create($request -> all());
        return redirect() -> route('index-route');
    }

    public function edit($id) {
        $drink = Drink::FindOrFail($id);
        return view('pages.edit-page', compact('drink'));
    }
    public function update(request $request, $id) {

        $drink = Drink::FindOrFail($id);
        $drink -> update($request -> all());
        // return redirect() -> route('show-route', $drink -> id);
        return redirect() -> route('index-route');
    }
}
