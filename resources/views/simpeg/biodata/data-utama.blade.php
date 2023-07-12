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
                    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
                        <li id="dashboard-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#dashboard" aria-controls="dashboard" aria-selected="true" role="tab" > DATA UTAMA </a> </li>
                        <li id="account-and-profile-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#account-and-profile" aria-selected="false" role="tab" > DATA PENDUKUNG </a> </li>
                        <li id="activities-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#activities" aria-selected="false" role="tab" > RIWAYAT PASANGAN </a> </li>
                        <li id="tasks-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#tasks" aria-selected="false" role="tab" > RIWAYAT ANAK </a> </li>
                        <li id="tasks-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#tasks" aria-selected="false" role="tab" > RIWAYAT ORANG TUA </a> </li>
                    </ul>
                </div>
                <!-- END: Profile Info -->
                <div class="intro-y tab-content mt-5">
                    <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="grid grid-cols-12 gap-6">
                            <!-- BEGIN: Top Categories -->
                            <div class="intro-y box col-span-12 lg:col-span-6">
                                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="font-medium text-base mr-auto">
                                        SIMPEG
                                    </h2>
                                    <div class="dropdown ml-auto">
                                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="edit" class="w-5 h-5 text-slate-500"></i> </a>
                                        
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
                                        SIASN
                                    </h2>
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
            </div>
            <!-- END: Content -->
    </div>
    
</div>

@endsection
