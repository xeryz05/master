<!-- Favicon -->
        {{-- <link
            rel="icon"
            href="{{ asset('logo/verdanco-title.png') }}"
            type="image/x-icon"
        /> --}}
@section('title')
    Grafik Revenue
@endsection
@section('style')
    <!-- Swiper CSS -->
    {{-- <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
    <link
        rel="stylesheet"
        href="{{ asset('css/carouselcss/owl.carousel.min.css') }}"
    />
    <link
        rel="stylesheet"
        href="{{ asset('css/carouselcss/owl.theme.default.min.css') }}"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/carouselcss/style.css') }}" />
@endsection
@extends('layouts.main')  
@section('content')
<body class="main-body app sidebar-mini ltr">
    <!-- Page -->
    <div class="page custom-index">
        <!-- main-content -->
        <div class="main-content app-content">
            <!-- container -->
            <div class="main-container container-fluid">
                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-center">
                    <h4 class="page-title">Revenue Verdanco Indoenesia</h4>
                </div>
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Verdanco Indonesia
                        </button>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item {{ request()->segment(1) == 'revenueVI' ? 'active' : '' }}" href="/revenueVI">Revenue VI</a></li>
                            <li><a class="dropdown-item {{ request()->segment(1) == 'revenueVE' ? 'active' : '' }}" href="/revenueVE">Revenue VE</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
                <!-- breadcrumb -->
                <!-- row -->

                <div class="row row-sm">
                    <!-- row closed -->

                    <!-- row opened -->
                    <div class="row row-sm">
                        <div class="col-xl-8 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="container px-4 mx-auto">
                                    <div class="p-6 m-20">
                                        <div>
                                            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                                        </div>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                        <script>
                                            var xValues = @json($jobs);
                                            var yValues = @json($total);
                                            var barColors = ['blue','red','green','yellow','purpel','salmon','pink','orange','indigo','azure','cyan','mustard','aqua','maroon',];

                                            new Chart("myChart", {
                                            type: "pie",
                                            data: {
                                                labels: xValues,
                                                datasets: [{
                                                backgroundColor: barColors,
                                                data: yValues
                                                }]
                                            },
                                            options: {
                                                title: {
                                                display: true,
                                                text: "World Wide Wine Production 2018"
                                                }
                                            }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @dd($total); --}}
                        {{-- <div class="col-xl-4 col-md-12 col-lg-12">
                            
                        </div> --}}
                        
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="card card-dashboard-eight pb-2">
								<h6 class="card-title">Detail Revenue</h6><span class="d-block mg-b-10 text-muted tx-12">KPI performance revenue Verdanco Indonesia</span>
								<div class="table-responsive">
                                    <table class="table table-bordered mg-b-0 text-md-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Bulan</th>
                                                <th>Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($revenues as $item)
                                            <tr>
                                                <td>{{ $item->type_jobs }}</td>
                                                <td>Rp.{{ number_format($item->grand_total) }}</td>
                                            </tr>
                                            @endforeach

                                            
                                            {{-- <tr>
                                                @foreach ($verevenues as $item)
                                                    <td>Crusher</td>
                                                    <td>Rp.{{ number_format($item->grand_total) }}</td>
                                                    @break
                                                @endforeach
                                            </tr> --}}
                                            {{-- <tr>
                                                @foreach ($verevenues as $item)
                                                    <td>Dwt Pump</td>
                                                    <td>Rp.{{ number_format($item->value_feb) }}</td>
                                                    @break
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach ($verevenues as $item)
                                                    <td>Grandmax</td>
                                                    <td>Rp.{{ number_format($item->value_feb) }}</td>
                                                    @break
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach ($verevenues as $item)
                                                    <td>Jual Asset</td>
                                                    <td>Rp.{{ number_format($item->value_feb) }}</td>
                                                    @break
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach ($verevenues as $item)
                                                    <td>MBP</td>
                                                    <td>Rp.{{ number_format($item->value_feb) }}</td>
                                                    @break
                                                @endforeach
                                            </tr> --}}
                                            
                                        </tbody>
                                    </table>
                                </div>
							</div>
                        </div>
                        {{--
                        <div class="col-xl-4 col-md-12 col-lg-6">cc</div>
                        --}} {{--
                        <div class="col-xl-4 col-md-12 col-lg-6">dd</div>
                        --}}
                    </div>
                    <!-- row close -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /main-content -->
        </div>
        <!-- End Page -->

        @endsection @section('script')
            <script src="{{ asset('js/carouseljs/jquery.min.js') }}"></script>
            <script src="{{ asset('js/carouseljs/popper.js') }}"></script>
            <script src="{{ asset('js/carousel/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('js/carouseljs/main.js') }}"></script>
        @endsection
    </div>
</body>
