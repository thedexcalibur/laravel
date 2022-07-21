<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ $active === 'Daftar Kursus' ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span class="align-text-bottom"></span>
                    <i class="fa-solid fa-fw fa-solid fa-swatchbook"></i> Daftar Kursus
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'Daftar Mahasiswa' ? 'active' : '' }}" href="/pelanggan">
                    <span class="align-text-bottom"></span>
                    <i class="fa-solid fa-people-group fa-fw"></i> Daftar Mahasiswa
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ $active === 'Jadwal Kursus' ? 'active' : '' }}" href="/pelanggan">
                    <span class="align-text-bottom"></span>
                    <i class="fa-solid fa-calendar fa-fw"></i> Jadwal Kursus
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span class="align-text-bottom"></span>
                    <i class="fa-solid fa-house fa-fw"></i> Ke Halaman Utama
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <span class=" align-text-bottom text-success text-decoration-none"><i
                            class="fa-solid fa-right-to-bracket"></i>
                        Sedang Login sebagai :
                        {{ auth()->user()->nama }} </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    @auth
                        <form action="/logout" method="post">
                            @csrf
                            <div class="mx-3">
                                <button type="submit" class="btn btn-danger btn-sm fw-bold text-white px-4"><i
                                        class="fa-solid fa-right-from-bracket fa-lg"></i> Keluar</button>
                            </div>
                        </form>

                    @endauth
                </a>
            </li>
        </ul>
    </div>
</nav>
