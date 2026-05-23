<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Inventory</title>

    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

</head>

<body class="bg-light">

<div class="container-fluid">

    <div class="row">

        <!-- MOBILE TOPBAR -->

        <div class="d-md-none bg-white shadow-sm p-3 d-flex justify-content-between align-items-center">

            <h5 class="fw-bold mb-0">
                AGUORA
            </h5>

            <button
                class="btn btn-dark"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileSidebar"
            >

                <i class="bi bi-list"></i>

            </button>

        </div>

        <!-- DESKTOP SIDEBAR -->

        <div class="col-md-2 bg-white border-end min-vh-100 p-3 d-none d-md-block">

            <h5 class="fw-bold mb-4">
                AGUORA
            </h5>

            <ul class="nav flex-column gap-2">

                <!-- DASHBOARD -->

                <li class="nav-item">

                    <a href="/dashboard" class="nav-link text-dark">

                        <i class="bi bi-grid me-2"></i>
                        Dashboard

                    </a>

                </li>

                <!-- ORDER -->

                <li class="nav-item">

                    <a href="#" class="nav-link text-dark">

                        <i class="bi bi-cart me-2"></i>
                        Order List

                    </a>

                </li>

                <!-- CUSTOMER -->

                <li class="nav-item">

                    <a href="/customers" class="nav-link text-dark">

                        <i class="bi bi-people me-2"></i>
                        Customer List

                    </a>

                </li>

                <!-- PRODUCT DROPDOWN -->

                <li class="nav-item">

                    <a
                        class="nav-link text-dark d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#desktopProductMenu"
                        role="button"
                    >

                        <span>

                            <i class="bi bi-box me-2"></i>
                            Product

                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </a>

                    <div class="collapse show" id="desktopProductMenu">

                        <ul class="nav flex-column ms-4 mt-2">

                            <li class="nav-item">

                                <a href="/products" class="nav-link text-primary">

                                    Product List

                                </a>

                            </li>

                            <li class="nav-item">

                                <a href="/categories" class="nav-link text-dark">

                                    Categories

                                </a>

                            </li>

                        </ul>

                    </div>

                </li>

                <!-- REPORT DROPDOWN -->

                <li class="nav-item">

                    <a
                        class="nav-link text-dark d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#desktopReportMenu"
                        role="button"
                    >

                        <span>

                            <i class="bi bi-graph-up me-2"></i>
                            Reports

                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </a>

                    <div class="collapse" id="desktopReportMenu">

                        <ul class="nav flex-column ms-4 mt-2">

                            <li class="nav-item">

                                <a href="#" class="nav-link text-dark">

                                    Sales Report

                                </a>

                            </li>

                            <li class="nav-item">

                                <a href="#" class="nav-link text-dark">

                                    Inventory Report

                                </a>

                            </li>

                        </ul>

                    </div>

                </li>

            </ul>

        </div>

        <!-- MOBILE SIDEBAR -->

        <div
            class="offcanvas offcanvas-start"
            tabindex="-1"
            id="mobileSidebar"
        >

            <div class="offcanvas-header">

                <h5 class="offcanvas-title">
                    AGUORA
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"
                ></button>

            </div>

            <div class="offcanvas-body">

                <ul class="nav flex-column gap-2">

                    <li class="nav-item">

                        <a href="/dashboard" class="nav-link text-dark">

                            <i class="bi bi-grid me-2"></i>
                            Dashboard

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="#" class="nav-link text-dark">

                            <i class="bi bi-cart me-2"></i>
                            Order List

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/customers" class="nav-link text-dark">

                            <i class="bi bi-people me-2"></i>
                            Customer List

                        </a>

                    </li>

                    <!-- MOBILE PRODUCT -->

                    <li class="nav-item">

                        <a
                            class="nav-link text-dark d-flex justify-content-between align-items-center"
                            data-bs-toggle="collapse"
                            href="#mobileProductMenu"
                        >

                            <span>

                                <i class="bi bi-box me-2"></i>
                                Product

                            </span>

                            <i class="bi bi-chevron-down"></i>

                        </a>

                        <div class="collapse show" id="mobileProductMenu">

                            <ul class="nav flex-column ms-4 mt-2">

                                <li class="nav-item">

                                    <a href="/products" class="nav-link text-primary">

                                        Product List

                                    </a>

                                </li>

                                <li class="nav-item">

                                    <a href="/categories" class="nav-link text-dark">

                                        Categories

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <!-- MOBILE REPORT -->

                    <li class="nav-item">

                        <a
                            class="nav-link text-dark d-flex justify-content-between align-items-center"
                            data-bs-toggle="collapse"
                            href="#mobileReportMenu"
                        >

                            <span>

                                <i class="bi bi-graph-up me-2"></i>
                                Reports

                            </span>

                            <i class="bi bi-chevron-down"></i>

                        </a>

                        <div class="collapse" id="mobileReportMenu">

                            <ul class="nav flex-column ms-4 mt-2">

                                <li class="nav-item">

                                    <a href="#" class="nav-link text-dark">

                                        Sales Report

                                    </a>

                                </li>

                                <li class="nav-item">

                                    <a href="#" class="nav-link text-dark">

                                        Inventory Report

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </li>

                </ul>

            </div>

        </div>

        <!-- MAIN CONTENT -->

        <div class="col-md-10 p-4">

            <!-- TOPBAR -->

            <div class="card border-0 shadow-sm mb-4">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <h4 class="mb-0">
                        Sales Inventory System
                    </h4>

                    <span class="fw-semibold">
                        Admin
                    </span>

                </div>

            </div>

            @yield('content')

        </div>

    </div>

</div>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>