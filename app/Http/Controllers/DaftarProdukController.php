<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class DaftarProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index', [
            'active' => 'Daftar Kursus',
            'produk' => Kursus::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tambahproduk', [
            'active' => 'Daftar Kursus'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $datakursus = $request->validate([
            'namakursus' => ['required', 'max:30', 'unique:kursus'],
            'deskripsi' => ['required', 'max:64',],
            'waktu' => ['required', 'date'],
            'lama' => ['required', 'max:3'],
        ]);
        Kursus::create($datakursus);
        return redirect('/dashboard')->with('success', 'Data Produk berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Kursus = Kursus::findOrFail($id);
        return view('dashboard.ubahproduk', [
            'title' => 'Ubah Data Kursus',
            'active' => 'Daftar Kursus',
            'produk' => $Kursus,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datakursus = $request->validate([
            'namakursus' => ['required', 'max:30'],
            'deskripsi' => ['required', 'max:64',],
            'waktu' => ['required', 'date'],
            'lama' => ['required', 'max:3'],
        ]);
        Kursus::whereId($id)->update($datakursus);
        return redirect('/dashboard')->with('success', 'Data Kursus berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kursus::where('id', $id)->delete();
        return redirect('/dashboard')->with('success', 'Data Kursus berhasil dihapus!');
    }
}
