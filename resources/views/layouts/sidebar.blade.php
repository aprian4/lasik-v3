<nav id="maximini" class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone - HTML Admin Template" class="w-9" src="images/logo.png">
        <span id="font-lasik" class="hidden xl:block text-white text-lg ml-3"> LASIK TANGSEL</span> 
    </a>
    <div class="side-nav__devider my-6"></div>
    
    
    <div id="side-profil">
    <center>
        <div class="w-24 h-24 image-fit relative">
            <img alt="" class="rounded-full border-white shadow-md tooltip" src="images/profil.webp">
        </div>
        <div class="side-menu__title text-white mt-2">
            <p><b>{{ Auth::user()->nama }}</b></p>
            <p><b>NIP. {{ Auth::user()->username }}</b></p>
            <p>Staff Seksi Data dan Informasi Kepegawaian</p>
        </div>
    </center>
        <div class="side-nav__devider my-6"></div>
    </div>
    <ul>
        <li>
            <a href="index.html" class="side-menu side-menu--active">
                <div class="side-menu__icon cursor-pointer" title="MENU UTAMA"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    MENU UTAMA 
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon cursor-pointer" title="SIMPEG"> <i data-lucide="user"></i> </div>
                <div class="side-menu__title">
                    SIMPEG
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Dashboard"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Data Pribadi"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Pribadi </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Data Kepegawaian"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Kepegawaian </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Data Pendidikan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Pendidikan </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Data Pelatihan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Pelatihan </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Data Kinerja"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Kinerja </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Data Pindah Instansi"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Pindah Instansi </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Data Lainnya"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Data Lainnya </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon cursor-pointer" title="APIK"> <i data-lucide="crosshair"></i> </div>
                <div class="side-menu__title">
                    APIK
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Dashboard"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Presensi"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Presensi </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Aktivitas"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Aktivitas </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="PPK - SKP"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> PPK - SKP </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Manajemen"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Manajemen </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Monitoring"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Monitoring </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon cursor-pointer" title="ALADIN"> <i data-lucide="file-plus"></i> </div>
                <div class="side-menu__title">
                    ALADIN
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Dashboard"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="SIMAPEKA"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> SIMAPEKA </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="ADIPATI"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> ADIPATI </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Legalisir"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Legalisir </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Kartu ASN"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Kartu ASN </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Satya Lencana"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Satya Lencana </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Usulan Cuti"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Usulan Cuti </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Izin Cerai"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Izin Cerai </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Pensiun"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Pensiun </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Mutasi"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Mutasi </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="PLT/PLH"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> PLT/PLH </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Pencantuman Gelar"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Pencantuman Gelar </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Kenaikan Pangkat"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Kenaikan Pangkat </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Penyesuaian Ijazah"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Penyesuaian Ijazah </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="IBEL/ TUBEL"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> IBEL/ TUBEL </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Diklat"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Diklat </div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon cursor-pointer" title="ADIPATI"> <i data-lucide="book-open"></i> </div>
                <div class="side-menu__title">
                    ADIPATI
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Sub Menu Adipati"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Sub Menu Adipati </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Sub Menu Adipati"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Sub Menu Adipati </div>
                    </a>
                </li>
            </ul>
        </li> --}}
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon cursor-pointer" title="HELPDESK"> <i data-lucide="headphones"></i> </div>
                <div class="side-menu__title">
                    HELPDESK
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Dashboard"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Pengajuan Pertanyaan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Pengajuan Pertanyaan </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Daftar Pertanyaan"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Daftar Pertanyaan </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon cursor-pointer" title="MANAJEMEN"> <i data-lucide="settings"></i> </div>
                <div class="side-menu__title">
                    MANAJEMEN
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Dashboard"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Akun ASN / User"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Akun ASN / User </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Sidik Jari & Wajah"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Sidik Jari & Wajah </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Pengumuman"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Pengumuman </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Mesin Finger"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Mesin Finger </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon cursor-pointer" title="Akun"> <i data-lucide="circle"></i> </div>
                        <div class="side-menu__title"> Akun </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>