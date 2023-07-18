@extends('layouts.master-simpeg')

@section('content')

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                DATA UTAMA
            </h2>
        </div>
        <!-- BEGIN: Profile Info -->
        <div class="intro-y box px-5 pt-2 mt-5">
            <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">
                <li id="data-pribadi-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#data-pribadi" aria-controls="data-pribadi" aria-selected="true" role="tab"> DATA PRIBADI </a> </li>
                <li id="posisi-jabatan-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#posisi-jabatan" aria-selected="false" role="tab"> POSISI & JABATAN </a> </li>
                <li id="data-lainnya-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#data-lainnya" aria-selected="false" role="tab"> DATA LAINNYA </a> </li>
            </ul>
        </div>
        <!-- END: Profile Info -->
        <div class="intro-y tab-content mt-5">
            @include('simpeg.data-utama.data-pribadi')
            @include('simpeg.data-utama.posisi-jabatan')
            @include('simpeg.data-utama.data-lainnya')
        </div>
    </div>
    <!-- END: Content -->
</div>


@endsection