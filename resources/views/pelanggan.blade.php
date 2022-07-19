@extends('layout.admin')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class=" form-keranjang w-100 m-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> <i class="fa-solid fa-people-group text-success fa-fw"></i> Daftar Pelanggan</h1>
            </div>

            <table class="text-center table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">No. HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">1</th>
                        <td>Bambang</td>
                        <td>08213332212</td>
                        <td>Jln. Kemerdekaan No. 1 Jakarta</td>
                        <td> <a class="badge text-bg-primary border-0 text-decoration-none" href="/detailpelanggan">Detail
                            </a>
                            <button class="badge text-bg-success border-0">Ubah
                            </button>
                            <button class="badge text-bg-danger border-0"
                                onclick="return confirm('Yakin ingin menghapus Produk ini dari keranjang?')">Hapus
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jamal</td>
                        <td>083221123332</td>
                        <td>Jln. Perkuliahan No. 2 Pengayoman Jakarta</td>
                        <td> <a class="badge text-bg-primary border-0 text-decoration-none" href="/detailpelanggan">Detail
                            </a>
                            <button class="badge text-bg-success border-0">Ubah
                            </button>
                            <button class="badge text-bg-danger border-0"
                                onclick="return confirm('Yakin ingin menghapus Produk ini dari keranjang?')">Hapus
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Ucok</td>
                        <td>0896232245322</td>
                        <td>Jln. Kepastian No. 22 Depok</td>
                        <td><a class="badge text-bg-primary border-0 text-decoration-none" href="/detailpelanggan">Detail
                            </a>
                            <button class="badge text-bg-success border-0">Ubah
                            </button>
                            <button class="badge text-bg-danger border-0"
                                onclick="return confirm('Yakin ingin menghapus Produk ini dari keranjang?')">Hapus
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </main>
@endsection
