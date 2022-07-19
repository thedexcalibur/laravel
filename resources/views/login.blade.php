@extends('layout.tampilan')
@section('container')
    <div class="text-center tengahgede">

        <div style="padding-top: 10%"></div>
        <h1>Login</h1>
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
                @csrf
                <h5 class=" mb-3 fw-normal">Masukkan Email dan Password</h5>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="text-success"><i class="fa-solid text-success fa-check"></i></span>
                        <span class="text-success"> {{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </span>
                        </button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="text-danger"><i class="fa-solid text-danger fa-circle-exclamation"></i></span>
                        <span class="text-danger"> {{ session('loginError') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </span>
                        </button>
                    </div>
                @endif
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="email" id="email"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password" id="password"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Masuk</button>
            </form>
            <p class="mt-3">Belum punya akun?<a class="text-decoration-none" href="/register"> Buat Akun</a></p>
        </main>

        <div style="padding-bottom: 10%"></div>

    </div>
@endsection
