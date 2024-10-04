<!doctype html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/dashboard/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 14:52:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Glowing - Bootstrap 5 HTML Templates</title>
    <link rel="icon" href="{{ asset('admin/assets/images/others/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/lightgallery/css/lightgallery-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mapbox-gl/mapbox-gl.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/theme.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css">

</head>

<body>
    <div class="wrapper dashboard-wrapper">
        <div class="d-flex flex-wrap flex-xl-nowrap">
            <div class="db-sidebar bg-body">
                <aside class="navbar navbar-expand-xl navbar-light d-block px-0 header-sticky dashboard-nav py-0">
                    @include('admin.layouts.navbar')
                </aside>
            </div>
            <div class="page-content">
                @include('admin.layouts.header')
                <main id="content" class="bg-body-tertiary-01 d-flex flex-column main-content">
                    @yield('content')
                    @include('admin.layouts.footer')
                </main>
            </div>
        </div>
    </div>
    @include('admin.layouts.script')
    {{-- hepler --}}
    @include('admin.layouts.helper')
</body>

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/dashboard/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 14:52:26 GMT -->

</html>
