<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="" class="w-6" src="{{ asset('/assets/dist/') }}/images/Icons/pill.png">
            <span class="text-white text-lg ml-3"> Gudang<span class="font-medium">Obat</span> </span>
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-29 py-5 hidden">
        <li>
            <a href="{{ route('dashboardView') }}" class="menu">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="{{ route('obatmasukView') }}" class="menu">
                <div class="menu__icon"> <i data-feather="corner-right-down"></i> </div>
                <div class="menu__title"> Obat Masuk </div>
            </a>
        </li>
        <li>
            <a href="{{ route('obatkeluarView') }}" class="menu">
                <div class="menu__icon"> <i data-feather="corner-right-up"></i> </div>
                <div class="menu__title"> Obat Keluar </div>
            </a>
            <!-- <ul class="menu__sub">
                <li>
                    <a href="index.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Overview 1 </div>
                    </a>
                </li>
            </ul> -->
        </li>
        <li>
            <a href="{{ route('laporanView') }}" class="menu">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> Laporan </div>
            </a>
        </li>
        <li>
            <a href="{{ route('masterobatView') }}" class="menu">
                <div class="menu__icon"> <i data-feather="database"></i> </div>
                <div class="menu__title"> Master Obat </div>
            </a>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->