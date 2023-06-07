@extends('layouts.main') @section('content')
<!-- Loader -->
<div id="global-loader">
    <img
        src="{{ asset('/img/svgicons/loader.svg') }}"
        class="loader-img"
        alt="Loader"
    />
</div>
<!-- /Loader -->

<!-- Page -->
<div class="page custom-index">
    <!-- main-content -->
    <div class="main-content app-content">
        <!-- container -->
        <div class="main-container container-fluid">
            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">
                            Hi, {{ Auth::user()->name }} welcome back!
                        </h2>
                        <p class="mg-b-0">
                            Sales monitoring dashboard template.
                        </p>
                    </div>
                </div>
            </div>
            <!-- breadcrumb -->

            <!-- row -->
            <div class="row row-sm">
                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div
                        class="card overflow-hidden sales-card bg-primary-gradient"
                    >
                        <div class="px-3 pt-3 pb-2 pt-0">
                            <div class="">
                                <h6 class="mb-3 tx-12 text-white">
                                    TODAY ORDERS
                                </h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <div class="">
                                        <h4
                                            class="tx-20 fw-bold mb-1 text-white"
                                        >
                                            $5,74.12
                                        </h4>
                                        <p class="mb-0 tx-12 text-white op-7">
                                            Compared to last week
                                        </p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                        <i
                                            class="fas fa-arrow-circle-up text-white"
                                        ></i>
                                        <span class="text-white op-7">
                                            +427</span
                                        >
                                    </span>
                                </div>
                            </div>
                        </div>
                        <span id="compositeline" class="pt-1"
                            >5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span
                        >
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div
                        class="card overflow-hidden sales-card bg-danger-gradient"
                    >
                        <div class="px-3 pt-3 pb-2 pt-0">
                            <div class="">
                                <h6 class="mb-3 tx-12 text-white">
                                    TODAY EARNINGS
                                </h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <div class="">
                                        <h4
                                            class="tx-20 fw-bold mb-1 text-white"
                                        >
                                            $1,230.17
                                        </h4>
                                        <p class="mb-0 tx-12 text-white op-7">
                                            Compared to last week
                                        </p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                        <i
                                            class="fas fa-arrow-circle-down text-white"
                                        ></i>
                                        <span class="text-white op-7">
                                            -23.09%</span
                                        >
                                    </span>
                                </div>
                            </div>
                        </div>
                        <span id="compositeline2" class="pt-1"
                            >3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span
                        >
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div
                        class="card overflow-hidden sales-card bg-success-gradient"
                    >
                        <div class="px-3 pt-3 pb-2 pt-0">
                            <div class="">
                                <h6 class="mb-3 tx-12 text-white">
                                    TOTAL EARNINGS
                                </h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <div class="">
                                        <h4
                                            class="tx-20 fw-bold mb-1 text-white"
                                        >
                                            $7,125.70
                                        </h4>
                                        <p class="mb-0 tx-12 text-white op-7">
                                            Compared to last week
                                        </p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                        <i
                                            class="fas fa-arrow-circle-up text-white"
                                        ></i>
                                        <span class="text-white op-7">
                                            52.09%</span
                                        >
                                    </span>
                                </div>
                            </div>
                        </div>
                        <span id="compositeline3" class="pt-1"
                            >5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span
                        >
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div
                        class="card overflow-hidden sales-card bg-warning-gradient"
                    >
                        <div class="px-3 pt-3 pb-2 pt-0">
                            <div class="">
                                <h6 class="mb-3 tx-12 text-white">
                                    PRODUCT SOLD
                                </h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <div class="">
                                        <h4
                                            class="tx-20 fw-bold mb-1 text-white"
                                        >
                                            $4,820.50
                                        </h4>
                                        <p class="mb-0 tx-12 text-white op-7">
                                            Compared to last week
                                        </p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                        <i
                                            class="fas fa-arrow-circle-down text-white"
                                        ></i>
                                        <span class="text-white op-7">
                                            -152.3</span
                                        >
                                    </span>
                                </div>
                            </div>
                        </div>
                        <span id="compositeline4" class="pt-1"
                            >5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span
                        >
                    </div>
                </div>
            </div>
            <!-- row closed -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /main-content -->

    <!-- Footer opened -->
    <div class="main-footer">
        <div class="container-fluid pd-t-0 ht-100p">
            <span>
                Copyright © 2023 
                <a href="javascript:void(0);" class="text-primary">PT. Verdanco Engineering
                </a> <span> All rights reserved.</span>
        </div>
    </div>
    <!-- Footer closed -->
</div>
<!-- End Page -->
@endsection
