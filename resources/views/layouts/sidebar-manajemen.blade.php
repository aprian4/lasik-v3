@php
  $menu_aktif = 0;  
@endphp

<nav id="maximini" class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone - HTML Admin Template" class="w-9" src="{{ url('images/logo.png') }}">
        <span id="font-lasik" class="hidden xl:block text-white text-lg ml-3"> MANAJEMEN </span> 
    </a>
    <div class="side-nav__devider my-6"></div>
    
    
    <div id="side-profil">
    <center>
        <div class="w-24 h-24 image-fit relative">
            <img alt="" class="rounded-full border-white shadow-md tooltip" src="{{ url('images/profil.webp') }}">
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
            <a href="{{ url('/manajemen')}}" class="side-menu{{ (request()->is('manajemen')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="DASHBOARD"> <i data-lucide="layout-dashboard"></i> </div>
                <div class="side-menu__title">
                    DASHBOARD 
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('manajemen/simpeg/data-master*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="DATA MASTER"> <i data-lucide="folder"></i> </div>
                <div class="side-menu__title">
                    DATA MASTER
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->is('manajemen/simpeg/data-master*')) ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ url('manajemen/simpeg/data-master/master-umum')}}" class="side-menu{{ (request()->is('manajemen/simpeg/data-master/master-umum')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Master Umum"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Master Umum </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('manajemen/simpeg/data-master/master-kepegawaian')}}" class="side-menu{{ (request()->is('manajemen/simpeg/data-master/master-kepegawaian')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Master Kepegawaian"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Master Kepegawaian </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('manajemen/simpeg/data-master/master-jabatan')}}" class="side-menu{{ (request()->is('manajemen/simpeg/data-master/master-jabatan')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Master Jabatan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Master Jabatan </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('manajemen/simpeg/data-master/master-skj')}}" class="side-menu{{ (request()->is('manajemen/simpeg/data-master/master-skj')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Master SKJ"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Master SKJ </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('manajemen/simpeg/data-master/master-instansi')}}" class="side-menu{{ (request()->is('manajemen/simpeg/data-master/master-instansi')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Master Instansi"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Master Instansi </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('manajemen/simpeg/data-master/master-pendidikan')}}" class="side-menu{{ (request()->is('manajemen/simpeg/data-master/master-pendidikan')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Master Pendidikan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Master Pendidikan </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('manajemen/simpeg/data-master/master-diklat')}}" class="side-menu{{ (request()->is('manajemen/simpeg/data-master/master-diklat')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Master Diklat"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Master Diklat </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('manajemen/simpeg/data-pegawai*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="DATA PEGAWAI"> <i data-lucide="user"></i> </div>
                <div class="side-menu__title">
                    DATA PEGAWAI
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('manajemen/simpeg/bso*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="BSO"> <i data-lucide="network"></i> </div>
                <div class="side-menu__title">
                    BSO
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('manajemen/simpeg/laporan*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="LAPORAN"> <i data-lucide="file"></i> </div>
                <div class="side-menu__title">
                    LAPORAN
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>  
            <ul class="{{ (request()->is('manajemen/simpeg/laporan*')) ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ url('manajemen/simpeg/laporan/duk')}}" class="side-menu{{ (request()->is('manajemen/simpeg/laporan/duk')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Laporan DUK"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Laporan DUK </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('manajemen/simpeg/laporan/pegawai')}}" class="side-menu{{ (request()->is('manajemen/simpeg/laporan/pegawai')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Laporan Pegawai"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Laporan Pegawai </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('manajemen/simpeg/laporan/pensiun')}}" class="side-menu{{ (request()->is('manajemen/simpeg/laporan/pensiun')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Laporan Pensiun"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Laporan Pensiun </div>
                    </a>
                </li>
            </ul>          
        </li>
    </ul>
</nav>