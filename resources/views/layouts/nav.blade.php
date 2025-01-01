<nav class="">
    <div class="sidebar-menu position-sticky pt-3">
        {{-- <div class="text-center mb-4">
            <img src="./assets/ikon/Logo-MEC.png" alt="Logo" class="img-fluid"
                style="max-width: 120px; padding-top: 30px">
        </div> --}}
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-light active" href="{{route('students.index')}}">
                    <img src="./assets/ikon/Dashboard.svg" alt="">Siswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('mapels.index')}}">
                    <img src="./assets/ikon/payment.svg" alt="">Mata Pelajaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('nilai.index')}}">
                    <img src="./assets/ikon/Siswa.svg" alt="">Nilai
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light log-out-btn">
                    <img src="./assets/ikon/logout.svg" alt="">Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
