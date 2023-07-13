@extends('layouts.master-simpeg')

@section('content')

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-12">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                DASHBOARD
            </h2>
        </div>

        <!-- BEGIN: General Report -->
        <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                <div class="box p-5 zoom-in">
                    <div class="flex items-center">
                        <div class="flex-none">
                            <div class="text-lg font-medium truncate">Kenaikan Pangkat Berikutnya</div>
                            <div class="text-slate-500 mt-1">29 April 2023</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                <div class="box p-5 zoom-in">
                    <div class="flex items-center">
                        <div class="flex-none">
                            <div class="text-lg font-medium truncate">KGB Berikutnya</div>
                            <div class="text-slate-500 mt-1">29 April 2024</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                <div class="box p-5 zoom-in">
                    <div class="flex items-center">
                        <div class="flex-none">
                            <div class="text-lg font-medium truncate">Pensiun Anda</div>
                            <div class="text-slate-500 mt-1">29 April 2050</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                <div class="box p-5 zoom-in">
                    <div class="flex items-center">
                        <div class="flex-none">
                            <div class="text-lg font-medium truncate">Pengajuan Perubahan Data</div>
                            <div class="text-slate-500 mt-1">14</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: General Report -->
        <div class="intro-y box mt-5 mb-5">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Kelengkapan Data ASN
                </h2>
            </div>
            <div id="progressbar-label" class="p-5">
                <div class="preview">
                    <div class="progress h-4">
                        <div class="progress-bar w-1/2" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>

                </div>
            </div>
        </div>

        <div class="intro-y box mt-5 mb-5">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Nilai Indeks Profesionalitas ASN
                </h2>
            </div>
            <div class="intro-y box">
                <div class="p-5" id="basic-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">No</th>
                                        <th class="whitespace-nowrap">Dimensi (Indikator)</th>
                                        <th class="whitespace-nowrap">Sub Dimensi</th>
                                        <th class="whitespace-nowrap">Skor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kualifikasi</td>
                                        <td>Riwayat Pendidikan Terakhir (nilai Maks. 25)</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Kompetensi</td>
                                        <td>Riwayat Pengembangan Kompetensi (nilai Maks. 40)</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Kinerja</td>
                                        <td>Hasil Penilaian Kinerja (nilai Maks. 25)</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Disiplin</td>
                                        <td>Riwayat Hukuman Disiplin (nilai Maks. 5)</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>Riwayat Hukuman Disiplin (nilai Maks. 100)</b></td>
                                        <td><b>70</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection