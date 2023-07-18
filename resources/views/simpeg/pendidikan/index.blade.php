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
                <li id="riwayat-pendidikan-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#riwayat-pendidikan" aria-controls="riwayat-pendidikan" aria-selected="true" role="tab"> RIWAYAT PENDIDIKAN </a> </li>
                <li id="riwayat-tubel-ibel-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-tubel-ibel" aria-selected="false" role="tab"> RIWAYAT TUGAS/ IZIN BELAJAR </a> </li>
            </ul>
        </div>
        <!-- END: Profile Info -->
        <div class="intro-y tab-content mt-5">
            @include('simpeg.pendidikan.riwayat-pendidikan')
            @include('simpeg.pendidikan.riwayat-tubel-ibel')
        </div>
        <!-- END: Content -->
    </div>


    @endsection