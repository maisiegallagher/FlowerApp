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
            'flower' => 'required',
            'color' => 'required',
        ]);
        $flower = new Flower;
        $flower.name = $request->flower;


    }
}

