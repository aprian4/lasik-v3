@extends('layouts.master-simpeg')

@section('content')

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                KEPEGAWAIAN
            </h2>
        </div>
        <!-- BEGIN: Profile Info -->
        <div class="intro-y box px-5 pt-2 mt-5">
            <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">
                <li id="cpns-pns-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#cpns-pns" aria-controls="cpns-pns" aria-selected="true" role="tab"> RIWAYAT CPNS & PNS </a> </li>
                <li id="riwayat-golongan-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-golongan" aria-selected="false" role="tab"> RIWAYAT GOLONGAN </a> </li>
                <li id="riwayat-jabatan-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-jabatan" aria-selected="false" role="tab"> RIWAYAT JABATAN </a> </li>
                <li id="riwayat-jabatantambahan-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-jabatantambahan" aria-selected="false" role="tab"> RIWAYAT JABATAN TAMBAHAN </a> </li>
                <li id="riwayat-kgb-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-kgb" aria-selected="false" role="tab"> RIWAYAT KGB </a> </li>
                <li id="riwayat-pak-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-pak" aria-selected="false" role="tab"> RIWAYAT PAK </a> </li>
                <li id="riwayat-pmk-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-pmk" aria-selected="false" role="tab"> RIWAYAT PMK </a> </li>
                <li id="riwayat-pendukung-kepegawaian-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-pendukung-kepegawaian" aria-selected="false" role="tab"> PENDUKUNG KEPEGAWAIAN </a> </li>
            </ul>
        </div>
        <!-- END: Profile Info -->
        <div class="intro-y tab-content mt-5">
            @include('simpeg.kepegawaian.cpns-pns')
            @include('simpeg.kepegawaian.riwayat-golongan')
            @include('simpeg.kepegawaian.riwayat-jabatan')
            @include('simpeg.kepegawaian.riwayat-jabatantambahan')
            @include('simpeg.kepegawaian.riwayat-kgb')
            @include('simpeg.kepegawaian.riwayat-pak')
            @include('simpeg.kepegawaian.riwayat-pmk')
            @include('simpeg.kepegawaian.pendukung-kepegawaian')
        </div>
        <!-- END: Content -->
    </div>


    @endsection