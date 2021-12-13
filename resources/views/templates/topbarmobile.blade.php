<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{ asset('/assets/dist/') }}/images/logo.svg">
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
            <a href="#" class="menu menu--active">
                <div class="menu__icon"> <i data-feather="corner-right-up"></i> </div>
                <div class="menu__title"> Obat Keluar <i data-feather="chevron-up" class="menu__sub-icon transform rotate-180"></i> </div>
            </a>
            <ul class="menu__sub">
                <li>
                    <a href="index.html" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Overview 1 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="" class="menu">
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