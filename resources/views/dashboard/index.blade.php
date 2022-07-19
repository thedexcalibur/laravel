@extends('layout.admin')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class=" form-keranjang w-100 m-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> <i class="fa-solid fa-fw fa-box text-primary"></i> Daftar Produk</h1>
            </div>
            <a href="/dashboard/create" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i>
                Tambah Produk</a>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="text-success"><i class="fa-solid text-success fa-check"></i></span>
                    <span class="text-danger"> {{ session('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="text-center table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($produk as $db)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ '/storage/produk/' . $db->gambar_produk }}" alt=""
                                    class="img-thumbnail" style="width: 40%">
                            </td>
                            <td>{{ $db->nama_produk }}</td>
                            <td>{{ $db->harga }}</td>
                            <td> <a class="badge text-bg-success border-0 text-decoration-none"
                                    href="/dashboard/{{ $db->id }}/edit">Ubah
                                </a>
                                <form action="/dashboard/{{ $db->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge text-bg-danger border-0"
                                        onclick="return confirm('Yakin ingin menghapus Produk ini dari keranjang?')"
                                        type="submit">Hapus
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
@endsection
