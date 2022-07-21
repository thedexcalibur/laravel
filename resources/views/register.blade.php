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
                        placeholder="Bambang Supratman" maxlength="30">
                    <label for="floatingInput">Nama Lengkap</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" id="floatingInput" name="username"
                        placeholder="bambang1" maxlength="15">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control mb-3" id="floatingInput" name="email" placeholder="bambang1"
                        maxlength="15">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="text"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                        class="form-control mb-3" name="npm" maxlength="8" id="floatingInput"
                        placeholder="082122332212">
                    <label for="floatingInput">NPM</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control mb-3" id="floatingInput" name="kelas" maxlength="5"
                        placeholder="4KA33">
                    <label for="floatingInput">Kelas</label>
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
