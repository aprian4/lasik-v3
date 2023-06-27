@php
  $menu_aktif = 0;  
@endphp

<nav id="maximini" class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone - HTML Admin Template" class="w-9" src="{{ url('images/logo.png') }}">
        <span id="font-lasik" class="hidden xl:block text-white text-lg ml-3"> SIMPEG</span> 
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
            <a href="{{ url('/simpeg')}}" class="side-menu{{ (request()->is('simpeg')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="DASHBOARD"> <i data-lucide="layout-dashboard"></i> </div>
                <div class="side-menu__title">
                    DASHBOARD 
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('simpeg/biodata*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="BIODATA"> <i data-lucide="user"></i> </div>
                <div class="side-menu__title">
                    BIODATA
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->is('simpeg/biodata*')) ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ url('/simpeg/biodata/data-utama')}}" class="side-menu{{ (request()->is('simpeg/biodata/data-utama')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Data Utama"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Utama </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu{{ (request()->is('simpeg/biodata/data-pendukung')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Data Pendukung"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Pendukung</div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu{{ (request()->is('simpeg/biodata/riwayat-pasangan')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Pasangan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Pasangan</div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu{{ (request()->is('simpeg/biodata/riwayat-anak')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Anak"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Anak</div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu{{ (request()->is('simpeg/biodata/riwayat-orangtua')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Data Orang Tua"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Orang Tua</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('simpeg/kepegawaian*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="KEPEGAWAIAN"> <i data-lucide="briefcase"></i> </div>
                <div class="side-menu__title">
                    KEPEGAWAIAN
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->is('simpeg/kepegawaian*')) ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ url('/simpeg/kepegawaian/riwayat-cpns-pns')}}" class="side-menu{{ (request()->is('simpeg/kepegawaian/riwayat-cpns-pns')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat CPNS & PNS"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat CPNS & PNS </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kepegawaian/riwayat-gol-pangkat')}}" class="side-menu{{ (request()->is('simpeg/kepegawaian/riwayat-gol-pangkat')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Golongan/Pangkat"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Golongan/Pangkat </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kepegawaian/riwayat-jabatan')}}" class="side-menu{{ (request()->is('simpeg/kepegawaian/riwayat-jabatan')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Jabatan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Jabatan </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kepegawaian/riwayat-jabatan-tambahan')}}" class="side-menu{{ (request()->is('simpeg/kepegawaian/riwayat-jabatan-tambahan')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Jabatan Tambahan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Jabatan Tambahan </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kepegawaian/riwayat-kgb')}}" class="side-menu{{ (request()->is('simpeg/kepegawaian/riwayat-kgb')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat KGB"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat KGB </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kepegawaian/riwayat-pak')}}" class="side-menu{{ (request()->is('simpeg/kepegawaian/riwayat-pak')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat PAK"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat PAK </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kepegawaian/riwayat-pmk')}}" class="side-menu{{ (request()->is('simpeg/kepegawaian/riwayat-pmk')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat PMK"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat PMK </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kepegawaian/riwayat-data-pendukung')}}" class="side-menu{{ (request()->is('simpeg/kepegawaian/riwayat-data-pendukung')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Data Pendukung Kepegawaian"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Pendukung Kepegawaian </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('simpeg/pendidikan*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="PENDIDIKAN"> <i data-lucide="graduation-cap"></i> </div>
                <div class="side-menu__title">
                    PENDIDIKAN
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->is('simpeg/pendidikan*')) ? 'side-menu__sub-open' : '' }}">               
                <li>
                    <a href="{{ url('/simpeg/pendidikan/riwayat-pendidikan')}}" class="side-menu{{ (request()->is('/simpeg/pendidikan/riwayat-pendidikan')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Pendidikan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Pendidikan </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/pendidikan/riwayat-tubel-ibel')}}" class="side-menu{{ (request()->is('/simpeg/pendidikan/riwayat-tubel-ibel')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Riwayat TUBEL/ IBEL"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Tugas/ Izin Belajar </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('simpeg/pelatihan*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="PELATIHAN"> <i data-lucide="bookmark"></i> </div>
                <div class="side-menu__title">
                    PELATIHAN
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->is('simpeg/pelatihan*')) ? 'side-menu__sub-open' : '' }}">             
                <li>
                    <a href="{{ url('/simpeg/pelatihan/riwayat-diklat-jabatan')}}" class="side-menu{{ (request()->is('/simpeg/pelatihan/riwayat-diklat-jabatan')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Diklat Jabatan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Diklat Jabatan </div>
                    </a>
                </li>             
                <li>
                    <a href="{{ url('/simpeg/pelatihan/riwayat-diklat-teknis')}}" class="side-menu{{ (request()->is('/simpeg/pelatihan/riwayat-diklat-teknis')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Diklat Teknis"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Diklat Teknis </div>
                    </a>
                </li>             
                <li>
                    <a href="{{ url('/simpeg/pelatihan/riwayat-diklat-fungsional')}}" class="side-menu{{ (request()->is('/simpeg/pelatihan/riwayat-diklat-fungsional')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Diklat Fungsional"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Diklat Fungsional </div>
                    </a>
                </li>            
                <li>
                    <a href="{{ url('/simpeg/pelatihan/riwayat-seminar')}}" class="side-menu{{ (request()->is('/simpeg/pelatihan/riwayat-seminar')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Seminar"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Seminar </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('simpeg/kinerja*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="KINERJA"> <i data-lucide="trending-up"></i> </div>
                <div class="side-menu__title">
                    KINERJA
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->is('simpeg/kinerja*')) ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ url('/simpeg/kinerja/riwayat-skp')}}" class="side-menu{{ (request()->is('/simpeg/kinerja/riwayat-skp')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat SKP"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat SKP </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kinerja/riwayat-penghargaan')}}" class="side-menu{{ (request()->is('/simpeg/kinerja/riwayat-penghargaan')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Penghargaan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Penghargaan </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kinerja/riwayat-disiplin')}}" class="side-menu{{ (request()->is('/simpeg/kinerja/riwayat-disiplin')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Disiplin"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Disiplin </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/kinerja/riwayat-cltn')}}" class="side-menu{{ (request()->is('/simpeg/kinerja/riwayat-cltn')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat CLTN"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat CLTN </div>
                    </a>
                </li>
            </ul>
        </li>
       
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('simpeg/pindah-instansi*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="PINDAH INSTANSI"> <i data-lucide="building"></i> </div>
                <div class="side-menu__title">
                    PINDAH INSTANSI
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->is('simpeg/pindah-instansi*')) ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ url('/simpeg/pelatihan/riwayat-mutasi-masuk')}}" class="side-menu{{ (request()->is('/simpeg/pelatihan/riwayat-mutasi-masuk')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Mutasi Masuk"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Mutasi Masuk </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/pelatihan/riwayat-mutasi-keluar')}}" class="side-menu{{ (request()->is('/simpeg/pelatihan/riwayat-mutasi-keluar')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Mutasi Keluar"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Mutasi Keluar </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu{{ (request()->is('simpeg/data-lainnya*')) ? ' side-menu--active' : '' }}">
                <div class="side-menu__icon cursor-pointer" title="DATA LAINNYA"> <i data-lucide="file"></i> </div>
                <div class="side-menu__title">
                    DATA LAINNYA
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->is('simpeg/data-lainnya*')) ? 'side-menu__sub-open' : '' }}">               
                <li>
                    <a href="{{ url('/simpeg/data-lainnya/riwayat-profesi')}}" class="side-menu{{ (request()->is('/simpeg/data-lainnya/riwayat-profesi')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Profesi"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Profesi </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/data-lainnya/riwayat-str')}}" class="side-menu{{ (request()->is('/simpeg/data-lainnya/riwayat-str')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat STR"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat STR </div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/simpeg/data-lainnya/riwayat-kunjungan')}}" class="side-menu{{ (request()->is('/simpeg/data-lainnya/riwayat-kunjungan')) ? ' side-menu--active' : '' }}">
                        <div class="side-menu__icon cursor-pointer" title="Riwayat Kunjungan Luar Negeri"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Riwayat Kunjungan Luar Negeri </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>