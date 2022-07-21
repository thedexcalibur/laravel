@extends('layout.tampilan')
@section('container')
    <main>
        <div class="container marketing">
            <div class="row featurette">
                <div class="col-md-7 p-md-5 mt-5 text-white rounded ">
                    <h1 class="display-5 text-dark"> Kursus Bahasa Pemrograman <br> <strong>Universitas Jewepe</strong>
                    </h1>
                    <p class="lead my-3 text-dark">Alamat kami : Jln. Merdeka Barat 1, Jakarta</p>
                </div>
                <div class="col-md-5 p-md-7 pl-5">
                    <img src="img/gambar.png" style="width: 70%" class="img-fluid rounded" alt="">
                </div>

            </div>



            <h1 class="d-flex mt-5 justify-content-center">Daftar Kursus Pembelajaran</h1>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($produk as $db)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h4>{{ $db->namakursus }}</h4>
                                        <p>{{ $db->deskripsi }}</p>
                                        <h6><i class="fa-solid fa-clock fa-fw fa-sm text-success"></i> Lama Kursus :
                                            {{ $db->lama }} hari</h6>
                                        <h6><i class="fa-solid fa-calendar fa-fw fa-sm text-primary"></i> Jadwal Kursus :
                                            <td>{{ \Carbon\Carbon::parse($db->waktu)->format('d F Y') }}</td>
                                        </h6>
                                        @auth('web')
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a class="btn btn-outline-primary stretched-link mt-2"
                                                    href="/detailproduk/{{ $db->id }}">Daftar</a>
                                            </div>
                                        @else
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a class="btn btn-outline-primary stretched-link mt-2" href="/login">Login
                                                    Untuk Mendaftar</a>
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
