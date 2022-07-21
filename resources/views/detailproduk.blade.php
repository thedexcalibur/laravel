@extends('layout.tampilan')
@section('container')
    <div class="container marketing">

        <div class="row featurette">

            <div style="padding-top: 6%"></div>
            <h1 class="text-center">Detail Kursus</h1>

            <div class="col-md-7 p-md-5 text-white rounded">
                <h1 class="text-dark">{{ $produk->namakursus }}</h1>
                <p class="display-6 my-3 text-dark">{{ $produk->deskripsi }}</p>
            </div>
            <div class="d-flex flex-row-reverse"> <button type="button" class="btn btn-success btn-lg"><i
                        class="fa-solid fa-cart-plus"></i> Tambah ke
                    Keranjang</button>
            </div>
        </div>
        <div style="padding-bottom: 5%"></div>
    </div>
@endsection
