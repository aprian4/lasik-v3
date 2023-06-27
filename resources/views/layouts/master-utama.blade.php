<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ url('images/logo.png') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="LASIK adalah Sistem Layanan Administrasi dan Informasi Kepegawaian Kota Tangerang Selatan.">
        <meta name="keywords" content="lasik tangsel, lasik, tangsel, simpeg, apik, sipenabaja">
        <meta name="author" content="LASIK">
        <title>LASIK - Layanan Administrasi dan Informasi Kepegawaian</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ url('template/dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                  @include('layouts.topbar-utama')
                <!-- END: Top Bar -->
                  @yield('content')
            </div>
            <!-- END: Content -->
        </div>
        
        <!-- BEGIN: JS Assets-->
          @include('layouts.js')
        <!-- END: JS Assets-->
    </body>
</html>