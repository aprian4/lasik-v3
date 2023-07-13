@extends('layouts.master-simpeg')

@section('content')

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                BIODATA
            </h2>
        </div>
        <!-- BEGIN: Profile Info -->
        <div class="intro-y box px-5 pt-2 mt-5">
            <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">
                <li id="data-utama-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#data-utama" aria-controls="data-utama" aria-selected="true" role="tab"> DATA UTAMA </a> </li>
                <li id="data-pendukung-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#data-pendukung" aria-selected="false" role="tab"> DATA PENDUKUNG </a> </li>
                <li id="activities-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-pasangan" aria-selected="false" role="tab"> RIWAYAT PASANGAN </a> </li>
                <li id="tasks-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-anak" aria-selected="false" role="tab"> RIWAYAT ANAK </a> </li>
                <li id="tasks-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#riwayat-orangtua" aria-selected="false" role="tab"> RIWAYAT ORANG TUA </a> </li>
            </ul>
        </div>
        <!-- END: Profile Info -->
        <div class="intro-y tab-content mt-5">
            <div id="data-utama" class="tab-pane active" role="tabpanel" aria-labelledby="data-utama-tab">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Top Categories -->
                    <div class="intro-y box col-span-12 lg:col-span-6">
                        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Data SIMPEG
                            </h2>
                            <div>
                                <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="repeat" class="w-4 h-4 mr-1"></i>sinkronisasi</a>
                            </div>
                        </div>
                        <div id="horizontal-form" class="p-5">
                            <div class="preview">
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label sm:w-20">NIP</label>
                                    <input id="horizontal-form-1" type="text" class="form-control" value="199304292020121007" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Nama</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="APRIAN KARISMAN" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Gelar Depan</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="-" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Gelar Belakang</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="S.T" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Tempat Lahir</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="KUNINGAN" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Tanggal Lahir</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="29-04-1993" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Jenis Kelamin</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="LAKI-LAKI" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Status Pegawai</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="PNS" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Status Kedudukan</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="AKTIF" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Status Pernikahan</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="KAWIN" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Email</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="aprian.cendekia@gmail.com" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">No. HP</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="081286178578" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- END: Top Categories -->
                    </div>
                    <!-- BEGIN: Work In Progress -->
                    <div class="intro-y box col-span-12 lg:col-span-6">
                        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Data SIASN
                            </h2>
                            <div>
                                <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="download" class="w-4 h-4 mr-1"></i>update</a>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="preview">
                                <div class="form-inline">
                                    <label for="horizontal-form-1" class="form-label sm:w-20">NIP</label>
                                    <input id="horizontal-form-1" type="text" class="form-control" value="199304292020121007" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Nama</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="APRIAN KARISMAN" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Gelar Depan</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="-" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Gelar Belakang</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="S.T" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Tempat Lahir</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="KUNINGAN" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Tanggal Lahir</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="29-04-1993" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Jenis Kelamin</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="LAKI-LAKI" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Status Pegawai</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="PNS" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Status Kedudukan</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="AKTIF" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Status Pernikahan</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="KAWIN" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">Email</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="aprian.cendekia@gmail.com" disabled>
                                </div>
                                <div class="form-inline mt-5">
                                    <label for="horizontal-form-2" class="form-label sm:w-20">No. HP</label>
                                    <input id="horizontal-form-2" type="text" class="form-control" value="081286178578" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Work In Progress -->
                </div>
            </div>
            <div id="data-pendukung" class="tab-pane" role="tabpanel" aria-labelledby="data-pendukung-tab">
                <!-- BEGIN: HTML Table Data -->
                <div class="intro-y box p-5 mt-5">
                    <div class="p-5" id="basic-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-nowrap" style="width: 5%;">NO</th>
                                            <th class="whitespace-nowrap" style="width: 15%;">DATA</th>
                                            <th class="whitespace-nowrap" style="width: 70%;"></th>
                                            <th class="whitespace-nowrap">DOKUMEN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                KTP
                                            </td>
                                            <td>
                                                <input id="horizontal-form-2" type="text" class="form-control" placeholder="No. KTP" value="3208202904930001" disabled>
                                            </td>
                                            <td>
                                                <img alt="" class="w-9" src="{{ url('images/pdf.png') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                Alamat KTP
                                            </td>
                                            <td>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <input type="text" class="form-control col-span-6" placeholder="Nama Jalan">
                                                    <input type="text" class="form-control col-span-3" placeholder="RT">
                                                    <input type="text" class="form-control col-span-3" placeholder="RW">
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                            </td>
                                            <td>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <input type="text" class="form-control col-span-6" placeholder="Kelurahan/Desa">
                                                    <input type="text" class="form-control col-span-6" placeholder="Kecamatan">
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                            </td>
                                            <td>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <select data-placeholder="Provinsi" class="tom-select w-full col-span-6">
                                                        <option>-- Pilih Provinsi --</option>
                                                        <option value="1">Banten</option>
                                                        <option value="2">Jawa Barat</option>
                                                        <option value="5">Morgan Freeman</option>
                                                    </select>
                                                    <select data-placeholder="Kota/kabupaten" class="tom-select w-full col-span-6">
                                                        <option>-- Pilih Kota/kabupaten --</option>
                                                        <option value="1">Kota Tangerang Selatan</option>
                                                        <option value="2">Kota Tangerang</option>
                                                        <option value="3">Kab Tangerang</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>NPWP</td>
                                            <td>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <input type="text" class="form-control col-span-6" placeholder="No. NPWP">
                                                    <input type="text" class="form-control col-span-6" placeholder="Tgl. NPWP">
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="" class="w-9" src="{{ url('images/pdf.png') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>KARTU BPJS/ASKES</td>
                                            <td>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <input type="text" class="form-control col-span-6" placeholder="No. BPJS">
                                                    <input type="text" class="form-control col-span-6" placeholder="Tgl. BPJS">
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="" class="w-9" src="{{ url('images/pdf.png') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>KARTU TASPEN</td>
                                            <td>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <input type="text" class="form-control col-span-6" placeholder="No. Taspen">
                                                    <input type="text" class="form-control col-span-6" placeholder="Tgl. Taspen">
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="" class="w-9" src="{{ url('images/pdf.png') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>KARPEG</td>
                                            <td>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <input type="text" class="form-control col-span-6" placeholder="No. Karpeg">
                                                    <input type="text" class="form-control col-span-6" placeholder="Tgl. Karpeg">
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="" class="w-9" src="{{ url('images/pdf.png') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>KARIS/KARSU</td>
                                            <td>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <input type="text" class="form-control col-span-6" placeholder="No. Karis/Karsu">
                                                    <input type="text" class="form-control col-span-6" placeholder="Tgl. Karis/Karsu">
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="" class="w-9" src="{{ url('images/pdf.png') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>AKTA LAHIR</td>
                                            <td>
                                                <div class="grid grid-cols-12 gap-2">
                                                    <input type="text" class="form-control col-span-6" placeholder="No. Akta Lahir">
                                                    <input type="text" class="form-control col-span-6" placeholder="Tgl. Akta Lahir">
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END: HTML Table Data -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content -->
</div>


@endsection