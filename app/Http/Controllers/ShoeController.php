<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index() {
        return view('index', ['shoes' => Shoe::latest()->get()]);
    }

    public function create() {
        return view('shoes.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);
        Shoe::create($formFields);
        return redirect('/')->with('message', 'Shoes added');
    }

    public function edit(Shoe $shoe) {
        return view('shoes.edit', ['shoe' => $shoe]);
    }

    public function update(Request $request, Shoe $shoe) {
        $newDistance = $request->input('distance');
        $shoe->update(['distance' => $newDistance]);
        return redirect('/')->with('message', 'Distance updated for ' . $shoe->name);
    }

    public function delete(Shoe $shoe) {
        $shoe->delete();
        return redirect('/')->with('message', $shoe->name . ' deleted');
    }
}
