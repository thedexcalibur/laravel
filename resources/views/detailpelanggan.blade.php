@extends('layout.admin')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class=" form-keranjang w-100 m-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> <i class="fa-solid fa-person-walking-luggage text-success fa-fw"></i> Detail Pelanggan
                </h1>
            </div>
            <div class="row featurette">
                <div class="card col-md-12 h4 p-md-5 text-dark rounded ">
                    <table cellspacing="0" cellpadding="5" width="800">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td colspan="5"></td>
                            <td> Bambang</td>
                        </tr>
                        <tr>
                            <td>Nomor HP </td>
                            <td> : </td>
                            <td colspan="5"></td>
                            <td> 08213332212</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td colspan="5"></td>
                            <td>Jln. Kemerdekaan No. 1 Jakarta</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td colspan="5"></td>
                            <td>bambang@email.com</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> <i class="fa-solid fa-truck-moving text-success fa-fw"></i> Pesanan Pelanggan
                </h1>
            </div>
            <table class="text-center table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td> <img src="img/ya.png" class="img-thumbnail" style="width: 40%" alt="">
                        </td>
                        <td>Whiskas Junior 450 Gram</td>
                        <td>Rp. 25.000</td>
                        <td>3</td>
                        <td>Rp. 75.000</td>
                    </tr>
                    <tr>
                        <th colspan="4"></th>
                        <td><strong>Total Produk Dibeli : </strong></td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="4"></th>
                        <td><strong>Total Harga : </strong></td>
                        <td>Rp. 75.000</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </main>
@endsection
