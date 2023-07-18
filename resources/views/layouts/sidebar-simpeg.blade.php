@php
$menu_aktif = 0;
@endphp

<nav id="maximini" class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="" class="w-9" src="{{ url('images/logo.png') }}">
        <span id="font-lasik" class="hidden xl:block text-white text-lg ml-3"> SIMPEG</span>
    </a>
    <div class="side-nav__devider my-6"></div>


    <div id="side-profil">
        <center>
            <div class="w-24 h-24 image-fit relative">
                <img alt="" class="rounded-full border-white shadow-md tooltip" src="{{ url('images/profil.jpg') }}">
            </div>
            <div class="side-menu__title text-white mt-2">
                <p><b>{{ Auth::user()->nama }}</b></p>
                <p><b>NIP. {{ Auth::user()->username }}</b></p>
                <p>{{ Auth::user()->skpd }}</p>
            </div>
        </center>
        <div class="side-nav__devider my-6"></div>
    </div>
    <ul>
        <li>
            <a href="{{ url('/')}}" class="side-menu{{ (request()->is('')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="MENU UTAMA"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    MENU UTAMA
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/simpeg')}}" class="side-menu{{ (request()->is('simpeg')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="DASHBOARD"> <i data-lucide="layout-dashboard"></i> </div>
                <div class="side-menu__title">
                    DASHBOARD
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/simpeg/data-utama') }}" class="side-menu{{ (request()->is('simpeg/data-utama*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="DATA UTAMA"> <i data-lucide="user"></i> </div>
                <div class="side-menu__title">
                    DATA UTAMA
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/simpeg/keluarga') }}" class="side-menu{{ (request()->is('simpeg/keluarga*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="KELUARGA"> <i data-lucide="users"></i> </div>
                <div class="side-menu__title">
                    KELUARGA
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/simpeg/kepegawaian') }}" class="side-menu{{ (request()->is('simpeg/kepegawaian*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="KEPEGAWAIAN"> <i data-lucide="briefcase"></i> </div>
                <div class="side-menu__title">
                    KEPEGAWAIAN
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/simpeg/pendidikan') }}" class="side-menu{{ (request()->is('simpeg/pendidikan*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="PENDIDIKAN"> <i data-lucide="graduation-cap"></i> </div>
                <div class="side-menu__title">
                    PENDIDIKAN
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/simpeg/pelatihan') }}" class="side-menu{{ (request()->is('simpeg/pelatihan*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="PELATIHAN"> <i data-lucide="bookmark"></i> </div>
                <div class="side-menu__title">
                    PELATIHAN
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/simpeg/kinerja') }}" class="side-menu{{ (request()->is('simpeg/kinerja*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="KINERJA"> <i data-lucide="trending-up"></i> </div>
                <div class="side-menu__title">
                    KINERJA
                </div>
            </a>
        </li>

        <li>
            <a href="{{ url('/simpeg/pindah-instansi') }}" class="side-menu{{ (request()->is('simpeg/pindah-instansi*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="PINDAH INSTANSI"> <i data-lucide="building"></i> </div>
                <div class="side-menu__title">
                    PINDAH INSTANSI
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/simpeg/data-lainnya') }}" class="side-menu{{ (request()->is('simpeg/data-lainnya*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="DATA LAINNYA"> <i data-lucide="file"></i> </div>
                <div class="side-menu__title">
                    DATA LAINNYA
                </div>
            </a>

        </li>
    </ul>
</nav>