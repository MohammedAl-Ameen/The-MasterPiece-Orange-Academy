<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\category;
use App\Models\product;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data["product"] = product::oldest()->get();
        $data["categories"] = category::latest()->take(5)->get();
        $data["brands"] = brand::take(3)->get();

        return view('/home', compact('data'));
    }
}
