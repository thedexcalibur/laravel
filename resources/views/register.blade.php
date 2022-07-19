@extends('layout.tampilan')
@section('container')
    <div class="text-center tengahgede">

        <div style="padding-top: 2%"></div>
        <h1>Buat Akun</h1>
        <main class="form-signup w-100 m-auto">
            <form action="/register" method="post">
                @csrf
                <h5 class=" mb-3 fw-normal">Masukkan Data-Data berikut</h5>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" id="floatingInput" name="nama"
                        placeholder="Bambang Supratman">
                    <label for="floatingInput">Nama Lengkap</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control mb-3" name="alamat" placeholder="Jln. Merdeka Selatan No. 1 Jakarta"
                        id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Alamat</label>
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control mb-3" name="nohp" id="floatingInput"
                        placeholder="082122332212">
                    <label for="floatingInput">Nomor HP</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control mb-3" name="email" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control mb-3" name="password" onkeyup='check();'
                        id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPasswordAgain" placeholder="Password"
                        onkeyup='check();'>
                    <label for="floatingPasswordAgain">Masukkan Password Kembali</label>
                </div>
                <div class="d-flex justify-content-start mb-3">
                    <label id='message'></label>
                </div>


                <button class="w-100 btn btn-lg btn-primary" type="submit">Buat Akun</button>
            </form>
            <p class="mt-3">Sudah punya akun?<a class="text-decoration-none" href="/login"> Login</a></p>
        </main>

        <div style="padding-bottom: 2%"></div>

    </div>
@endsection
