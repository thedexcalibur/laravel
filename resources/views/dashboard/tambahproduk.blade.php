@extends('layout.admin')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class=" form-keranjang w-100 m-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> <i class="fa-solid fa-fw fa-box-open text-primary"></i> Tambah Data Produk</h1>
            </div>
            <form action="/dashboard" method="POST" enctype="multipart/form-data">
                @csrf
                <h5 class=" mb-3 fw-normal">Masukkan Data-Data berikut</h5>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" name="nama_produk" id="floatingInput"
                        placeholder="Bambang Supratman" required>
                    <label for="floatingInput">Nama Produk</label>
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control mb-3" name="harga" id="floatingInput"
                        placeholder="082122332212" required>
                    <label for="floatingInput">Harga</label>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Unggah Gambar Produk</label>
                    <input class="form-control" required name="gambar_produk" type="file" id="formFile">
                </div>
                <button type="submit" class="w-100 btn btn-lg btn-primary">Tambah Data Produk</button>
            </form>

            <div style="padding-bottom: 2%"></div>

        </div>
    @endsection
