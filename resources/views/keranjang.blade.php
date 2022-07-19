@extends('layout.tampilan')
@section('container')
    <div class="text-center tengahgede">

        <h1 class="text-center">Keranjang</h1>
        <div class=" form-keranjang w-100 m-auto">

            <table class="text-center table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Aksi</th>
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
                        <td> <button class="badge bg-sm bg-danger border-0"
                                onclick="return confirm('Yakin ingin menghapus Produk ini dari keranjang?')">Hapus
                            </button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td> <img src="img/ya.png" class="img-fluid rounded" style="max-width: 40%" alt="">
                        </td>
                        <td>Whiskas Junior 450 Gram</td>
                        <td>Rp. 25.000</td>
                        <td>2</td>
                        <td>Rp. 50.000</td>
                        <td> <button class="badge bg-sm bg-danger border-0"
                                onclick="return confirm('Yakin ingin menghapus Produk ini dari keranjang?')">Hapus
                            </button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td> <img src="img/ya.png" class="img-fluid rounded" style="max-width: 40%" alt="">
                        </td>
                        <td>Whiskas Junior 450 Gram</td>
                        <td>Rp. 25.000</td>
                        <td>1</td>
                        <td>Rp. 25.000</td>
                        <td> <button class="badge bg-sm bg-danger border-0"
                                onclick="return confirm('Yakin ingin menghapus Produk ini dari keranjang?')">Hapus
                            </button></td>
                    </tr>
                    <tr>
                        <th colspan="4"></th>
                        <td><strong>Total Pemesanan Produk : </strong></td>
                        <td>6</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="4"></th>
                        <td><strong>Total Harga : </strong></td>
                        <td>Rp. 150.000</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end"> <button type="button" class="btn btn-success btn-lg"><i
                        class="fa-solid fa-check"></i> Pesan</button>
            </div>
        </div>
    </div>
@endsection
