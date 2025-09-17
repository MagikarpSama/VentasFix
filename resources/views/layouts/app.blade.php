<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VentasFix - Backoffice</title>
    <link rel="stylesheet" href="{{ asset('vuexy-bootstrap-html-admin-template/dist/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy-bootstrap-html-admin-template/dist/css/theme-default.css') }}">
    @yield('styles')
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Sidebar -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <!-- Logo SVG -->
                            <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold">VentasFix</span>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item">
                        <a href="/" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/users" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-users"></i>
                            <div>Usuarios</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/products" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-package"></i>
                            <div>Productos</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/clients" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-address-book"></i>
                            <div>Clientes</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- /Sidebar -->
            <!-- Layout page -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <span class="fw-bold">VentasFix</span>
                    </div>
                </nav>
                <!-- /Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                </div>
                <!-- /Content wrapper -->
            </div>
            <!-- /Layout page -->
        </div>
    </div>
    <script src="{{ asset('vuexy-bootstrap-html-admin-template/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vuexy-bootstrap-html-admin-template/dist/js/helpers.js') }}"></script>
    <script src="{{ asset('vuexy-bootstrap-html-admin-template/dist/js/menu.js') }}"></script>
    <script src="{{ asset('vuexy-bootstrap-html-admin-template/dist/js/template-customizer.js') }}"></script>
    @yield('scripts')
</body>
</html>
