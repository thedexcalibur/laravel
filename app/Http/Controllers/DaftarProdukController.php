<?php

namespace App\Http\Controllers;

use App\Models\Produk;
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
            'active' => 'Daftar Produk',
            'produk' => Produk::latest()->get(),
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
            'active' => 'Daftar Produk'
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
        $dataproduk = $request->validate([
            'nama_produk' => 'required',
            'gambar_produk' => 'file|max:4096',
            'harga' => 'required',
        ]);
        $request->hasFile('gambar_produk');
        $path = storage_path('app/public/produk/');
        $file = $request->file('gambar_produk');
        $name =  uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);
        $dataproduk['gambar_produk'] = $name;
        Produk::create($dataproduk);
        return redirect('/dashboard')->with('success', 'Data Produk berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Produk = Produk::findOrFail($id);
        return view('dashboard.ubahproduk', [
            'title' => 'Ubah Produk',
            'active' => 'Daftar Produk',
            'produk' => $Produk,
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
        $dataproduk = Produk::findOrFail($id);

        $produk = $request->validate([
            'nama_produk' => 'required',
            'gambar_produk' => 'file|max:4096',
            'harga' => 'required',
        ]);
        $hapusgambar = public_path('storage/produk/' . $dataproduk->gambar_produk);
        if ($request->hasfile('gambar_produk')) {
            if (file_exists($hapusgambar)) {
                unlink($hapusgambar);
            }
            $request->hasFile('gambar_produk');
            $path = storage_path('app/public/produk/');
            $file = $request->file('gambar_produk');
            $name =  uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $produk['gambar_produk'] = $name;
        }
        Produk::where('id', $id)->update($produk);
        return redirect('/dashboard')->with('success', 'Data Produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapusproduk = Produk::findOrFail($id);
        $hapusgambar = public_path('storage/produk/' . $hapusproduk->gambar_produk);
        if (file_exists($hapusgambar)) {
            unlink($hapusgambar);
        }
        Produk::where('id', $id)->delete();
        return redirect('/dashboard')->with('success', 'Produk berhasil dihapus!');
    }
}
