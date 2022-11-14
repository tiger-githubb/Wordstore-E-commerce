<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->

    <!-- plugin css for this page -->
    @yield('styles')
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png') }}" />

</head>

<body>

    <!-- partial:partials/_sidebar -->
    @include('layouts.adminpartials.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">

            @yield('content')

            <!-- partial:footer -->
            @include('layouts.adminpartials.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>

    <!-- base:js -->
    <script src="{{ asset('assets/admin/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page-->
    @yield('page_scripts')
    <!-- End plugin js for this page-->

    <!-- inject:js -->
    <script src="{{ asset('assets/admin/js/template.js') }}"></script>
    <!-- endinject -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if(session('status'))
    <script>
        swal("Good job!", "{{session('status')}}", "success");
    </script>

    @endif

</body>

</html>