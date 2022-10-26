<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="{{ Request::is('/') ? 'nav-link' : 'nav-link collapsed' }}" href="{{ url('/') }}">
                <i class="bi bi-grid"></i>
                <span>Beranda</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="{{ Request::is('komunitas') ? 'nav-link' : 'nav-link collapsed' }}" href="#">
                <i class="bi bi-bounding-box"></i>
                <span>Komunitas</span>
            </a>
        </li>

        @guest
        @else
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-bounding-box"></i><span>Komunitasku</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-heading">Kelola</li>
        <li class="nav-item">
            <a class="{{ Request::is('komunitas/*') ? 'nav-link' : 'nav-link collapsed' }}" href="#">
                <i class="bi bi-plus"></i>
                <span>Komunitas</span>
            </a>
        </li>

        @endguest

        <li class="nav-heading">Feed</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-chevron-double-up"></i>
                <span>Popular</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-chevron-bar-expand"></i>
                <span>Semua</span>
            </a>
        </li>

        <li class="nav-heading">Akun</li>

        @guest
        <li class="nav-item">
            <a class="{{ Request::is('login') ? 'nav-link' : 'nav-link collapsed' }}" href="{{ route('login') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Masuk</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="{{ Request::is('register') ? 'nav-link' : 'nav-link collapsed' }}" href="{{ route('register') }}">
                <i class="bi bi-card-list"></i>
                <span>Daftar</span>
            </a>
        </li>
        @else
        <li class="nav-item">
            <a class="{{ Request::is('pengaturan') ? 'nav-link' : 'nav-link collapsed' }}" href="#">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        @endguest

    </ul>

</aside>
