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
                    @foreach ($pelanggan as $dp)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $dp->nama }}</td>
                            <td>{{ $dp->alamat }}</td>
                            <td>{{ $dp->nohp }}</td>
                            <td>{{ $dp->email }}</td>
                            <td> <a class="badge text-bg-success border-0 text-decoration-none"
                                    href="/pelanggan/index/{{ $dp->id }}/edit">Ubah
                                </a>
                                <form action="/pelanggan/index/{{ $dp->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge text-bg-danger border-0"
                                        onclick="return confirm('Yakin ingin menghapus Produk ini dari keranjang?')"
                                        type="submit">Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
