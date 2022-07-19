@extends('layout.admin')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class=" form-keranjang w-100 m-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> <i class="fa-solid fa-fw fa-box-open text-primary"></i> Ubah Data Produk</h1>
            </div>
            <form action="/dashboard/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h5 class=" mb-3 fw-normal">Silahkan Ubah Data-Data berikut</h5>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" id="floatingInput" name="nama_produk"
                        placeholder="Bambang Supratman" value="{{ old('nama_produk', $produk->nama_produk) }}" required>
                    <label for="floatingInput">Nama Produk</label>
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control mb-3" name="harga" id="floatingInput"
                        placeholder="082122332212" required value="{{ old('harga', $produk->harga) }}">
                    <label for="floatingInput">Harga</label>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="file" id="gambar" name="gambar_produk" onchange="previewImage()"
                        value="{{ $produk->gambar_produk }}">
                    @if ($produk->gambar_produk)
                        <img src="{{ '/storage/produk/' . $produk->gambar_produk }}"
                            class="img-preview img-fluid mb-3 mt-3 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                </div>
                <button type="submit" class="w-100 btn btn-lg btn-primary">Ubah Data Produk</button>
            </form>

            <div style="padding-bottom: 2%"></div>

        </div>
    @endsection
