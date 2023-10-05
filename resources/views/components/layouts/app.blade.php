<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/sass/argon-dashboard.scss', 'resources/js/app.js'])
</head>
<body class="g-sidenav-show bg-gray-100">
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-2 bg-white ps ps--active-y"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
            <img
                src="https://www.wmsaude.com.br/assets/images/Logo_colorida_vetor.png"
                class="img-fluid" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto ps" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
{{--                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"--}}
{{--                   href="{{ route('dashboard') }}" wire:navigate>--}}
{{--                    <span class="nav-link-text ms-1">Dashboard</span>--}}
{{--                </a>--}}
                <a class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}"
                   href="{{ route('dashboard') }}" wire:navigate>
                    <span class="nav-link-text ms-1">Chamados</span>
                </a>
                <a class="nav-link {{ Request::routeIs('dashboard.departaments.*') ? 'active' : '' }}"
                       href="{{ route('dashboard.departaments.view') }}" wire:navigate>
                    <span class="nav-link-text ms-1">Departamentos</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<main class="main-content position-relative border-radius-lg ps">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
         id="navbarBlur"
         data-scroll="false">
        <div class="container-fluid py-1 px-3">
{{--            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">--}}
{{--                <div class="ms-md-auto pe-md-3 d-flex align-items-center">--}}
{{--                </div>--}}
{{--                <ul class="navbar-nav justify-content-end">--}}
{{--                    <li class="nav-item d-flex align-items-center">--}}
{{--                        <a class="nav-link text-secondary font-weight-bold px-0"--}}
{{--                           href="{{ route('dashboard') }}"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                                                                     document.getElementById('logout-form').submit();">--}}
{{--                            <i class="fa fa-user me-sm-1" aria-hidden="true"></i>--}}
{{--                            <span class="d-sm-inline d-none">Logout</span>--}}
{{--                        </a>--}}
{{--                        <form id="logout-form" action="{{ route('dashboard') }}" method="POST" class="d-none">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </nav>
    <div class="container-fluid">
        {{ $slot }}
    </div>
</main>
</body>
</html>
