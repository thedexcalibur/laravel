<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pastibisa()
    {
        return view('index', [
            'title' => 'Home',
            'active' => 'Home',
            'produk' => Kursus::latest()->get(),
        ]);
    }
    public function produkdetail($id)
    {
        $dataProduk = Kursus::findOrFail($id);

        return view('detailproduk', [
            'title' => 'Detail Kursus',
            'produk' => $dataProduk
        ]);
    }
}
