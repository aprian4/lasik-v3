<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="images/logo.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>LASIK - Layanan Administrasi dan Informasi Kepegawaian</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="template/dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
          @include('layouts.mobile-menu')
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
              @include('layouts.sidebar')
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