@extends('layout.tampilan')
@section('container')
    <div class="container marketing">

        <div class="row featurette">

            <div style="padding-top: 6%"></div>
            <h1 class="text-center">Detail Produk</h1>

            @foreach ($produk as $pd)
                <div class="col-md-5 p-md-5">
                    <img src="{{ '/storage/produk/' . $pd->gambar_produk }}" class="img-fluid rounded" style="width: 400px"
                        alt="">
                </div>
                <div class="col-md-7 p-md-5 text-white rounded">
                    <h1 class="text-dark">{{ $pd->nama_produk }}</h1>
                    <p class="display-6 my-3 text-dark">{{ $pd->harga }}</p>
            @endforeach
            <br>
            <br>
            <br>
            <br>
            <br>
            <h4 class="mb-3 text-dark">Ingin Pesan Berapa?</h4>
            <div class="d-flex justify-content-end col-md-5 form-floating mb-5 text-dark">
                <input type="number" class="form-control text-dark" id="floatingInput"
                    placeholder="Masukkan Jumlah Produk">
                <label for="floatingInput">Masukkan Jumlah Pemesanan</label>
            </div>
            <div class="d-flex flex-row-reverse"> <button type="button" class="btn btn-success btn-lg"><i
                        class="fa-solid fa-cart-plus"></i> Tambah ke
                    Keranjang</button>
            </div>
        </div>
        <div style="padding-bottom: 5%"></div>
    </div>
@endsection
