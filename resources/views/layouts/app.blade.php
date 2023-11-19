<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'PayNote')</title>
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body id="page-top">

  @include('modules.header')

  @yield('content')

  @include('modules.scripts')
  @include('modules.footer')
</body>
</html>
