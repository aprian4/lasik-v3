@extends('layouts.master-simpeg')

@section('content')

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                KELUARGA
            </h2>
        </div>
        <!-- BEGIN: Profile Info -->
        <div class="intro-y box px-5 pt-2 mt-5">
            <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">
                <li id="riwayat-pasangan-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#riwayat-pasangan" aria-controls="riwayat-pasangan" aria-selected="true" role="tab"> RIWAYAT PASANGAN </a> </li>
                <li id="riwayat-anak-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-anak" aria-selected="false" role="tab"> RIWAYAT ANAK </a> </li>
                <li id="riwayat-orangtua-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-orangtua" aria-selected="false" role="tab"> RIWAYAT ORANG TUA </a> </li>
            </ul>
        </div>
        <!-- END: Profile Info -->
        <div class="intro-y tab-content mt-5">
            @include('simpeg.keluarga.riwayat-pasangan')
            @include('simpeg.keluarga.riwayat-anak')
            @include('simpeg.keluarga.riwayat-orangtua')
        </div>
    </div>
    <!-- END: Content -->
</div>


@endsection