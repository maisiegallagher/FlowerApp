<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerDisplayController extends Controller
{
    public function index()
    {
        $flowers = Flower::get();

        return view('index', [
            'flowers' => $flowers,
        ]);
    }
}
