<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index()
    {
        return view('flower');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'color' => 'required',
        ]);


        Flower::create([
            'name' => $request->name,
            'color' => $request->color,
        ]);

        $flowers = Flower::get();

        return view('index', [
            'flowers' => $flowers,
        ]);
    }
}

