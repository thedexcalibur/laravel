@extends('layout.admin')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class=" form-keranjang w-100 m-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> <i class="fa-solid fa-fw fa-edit text-primary"></i> Ubah Data Kursus</h1>
            </div>
            <form action="/dashboard/{{ $produk->id }}" method="POST">
                @csrf
                @method('put')
                <h5 class=" mb-3 fw-normal">Masukkan Data-Data berikut</h5>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" name="namakursus" id="floatingInput"
                        placeholder="Bambang Supratman" maxlength="30"
                        value="{{ old('namakursus', $produk->namakursus) }}" required>
                    <label for="floatingInput">Nama Kursus</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" name="deskripsi" id="floatingInput"
                        placeholder="082122332212" required maxlength="64"
                        value="{{ old('deskripsi', $produk->deskripsi) }}">
                    <label for="floatingInput">Deskripsi Kursus</label>
                </div>
                <div class="form-floating">
                    <input type="date" class="form-control mb-3" name="waktu" id="floatingInput"
                        placeholder="Bambang Supratman" required value="{{ old('waktu', $produk->waktu) }}">
                    <label for="floatingInput">Waktu Kursus</label>
                </div>
                <label class="mb-3" for="floatingInput">
                    <td>Jadwal Sebelumnya : {{ \Carbon\Carbon::parse($produk->waktu)->format('d F Y') }}</td>
                </label>
                <div class="form-floating">
                    <input type="text"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                        class="form-control mb-3" name="lama" maxlength="3" value="{{ old('lama', $produk->lama) }}"
                        id="floatingInput" placeholder="082122332212">
                    <label for="floatingInput">Lama Kursus (Hari)</label>
                </div>
                <button type="submit" class="w-100 btn btn-lg btn-primary">Ubah Data Kursus</button>
            </form>

            <div style="padding-bottom: 2%"></div>

        </div>
    @endsection
