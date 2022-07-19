<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pastibisa()
    {
        return view('index', [
            'title' => 'Home',
            'active' => 'Home',
            'produk' => Produk::latest()->get(),
        ]);
    }
}
