<!-- BEGIN: Top Menu -->
<nav class="top-nav">
    <ul>
        <li>
            <a href="{{ route('dashboardView') }}" class="top-menu {{ $state == 'Dashboard' ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="home"></i> </div>
                <div class="top-menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="{{ route('obatmasukView') }}" class="top-menu {{ $state == 'Obat Masuk' ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="corner-right-down"></i> </div>
                <div class="top-menu__title"> Obat Masuk </div>
            </a>
        </li>
        <li>
            <a href="{{ route('obatkeluarView') }}" class="top-menu {{ $state == 'Obat Keluar' ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="corner-right-up"></i> </div>
                <div class="top-menu__title"> Obat Keluar </div>
                <!-- <i data-feather="chevron-down" class="top-menu__sub-icon"></i> -->
            </a>
            <!-- <ul class="">
                <li>
                    <a href="#" class="top-menu">
                        <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="top-menu__title"> Users </div>
                    </a>
                </li>
            </ul> -->
        </li>
        <li>
            <a href="{{ route('laporanView') }}" class="top-menu {{ $state == 'Laporan' ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="top-menu__title"> Laporan </div>
            </a>
        </li>
        <li>
            <a href="{{ route('masterobatView') }}" class="top-menu {{ $state == 'Master Obat' ? 'top-menu--active' : '' }}">
                <div class="top-menu__icon"> <i data-feather="database"></i> </div>
                <div class="top-menu__title"> Master Obat </div>
            </a>
        </li>
    </ul>
</nav>
<!-- END: Top Menu -->