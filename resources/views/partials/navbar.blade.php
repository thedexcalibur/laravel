<header>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Kursus Bahasa Pemrograman Universitas Jewepe </span>
            </a>
            {{-- <ul class="nav nav-pills">
                <!-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li> -->
                @auth('web')
                    <li class="nav-item"><a href="/keranjang" class="nav-link fw-bold border-0"><i
                                class="fa-solid fa-cart-shopping fa-fw fa-xl"></i></a></li>
                @else
                    <li class="nav-item"><a href="/register" class="nav-link fw-bold border-0"><i
                                class="fa-solid fa-cart-shopping fa-fw fa-xl"></i></a></li>
                @endauth
            </ul> --}}
            @auth('web')
                <a class="btn btn-primary bg-white text-primary fw-bold border-0 text-decoration-none"> <i
                        class="fa-solid fa-user fa-fw fa-xl"></i>
                    {{ auth()->user()->nama }} </a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class=" btn btn-outline-danger fw-bold border-0"><i
                            class="fa-solid fa-right-from-bracket fa-fw fa-xl"></i> Keluar</button>
                </form>
            @else
                <a href="/login" class="fw-bold btn btn-outline-primary mx-3">Masuk</a>
                <a href="/register" class="fw-bold btn btn-outline-success">Register</a>
            @endauth
    </div>
</header>
