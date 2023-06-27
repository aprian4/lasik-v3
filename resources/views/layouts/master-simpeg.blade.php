<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ url('images/logo.png') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="LASIK adalah Sistem Informasi Kepegawaian Kota Tangerang Selatan.">
      <meta name="keywords" content="simpeg tangsel, lasik, tangsel, simpeg">
        <meta name="author" content="SIMPEG">
        <title>SIMPEG - Sistem Informasi Kepegawaian</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ url('template/dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
          @include('layouts.mobile-menu-simpeg')
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
              @include('layouts.sidebar-simpeg')
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                  @include('layouts.topbar')
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