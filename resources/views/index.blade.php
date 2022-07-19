@extends('layout.tampilan')
@section('container')
    <main>
        <div class="container marketing">
            <div class="row featurette">


                <div class="col-md-7 p-md-5 text-white rounded ">
                    <h1 class="display-4 text-dark">Produk yang tersedia di <br>toko kami <br> <strong>100% Asli dan
                            Original</strong></h1>
                    <p class="lead my-3 text-dark">Alamat kami : Jln. Merdeka Barat 1, Jakarta</p>
                </div>
                <div class="col-md-5 p-md-5">
                    <img src="img/Me-O.jpg" class="img-fluid rounded" alt="">
                </div>

            </div>



            <h1 class="d-flex mt-5 justify-content-center">Produk Kami</h1>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                        @foreach ($produk as $db)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="{{ '/storage/produk/' . $db->gambar_produk }}" class="img-fluid rounded"
                                        alt="">
                                    <div class="card-body">
                                        <h4>{{ $db->nama_produk }}</h4>
                                        <h5>Rp. {{ $db->harga }}</h5>
                                        @auth('web')
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a class="btn btn-outline-primary stretched-link mt-2"
                                                    href="/detailproduk">Tambahkan Ke Keranjang</a>
                                            </div>
                                        @else
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a class="btn btn-outline-primary stretched-link mt-2" href="/login">Login
                                                    Untuk Memesan</a>
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </main>
@endsection
