<link
    rel="icon"
    href="{{ asset('assets/img/logo/verdanco-title.png') }}"
    type="image/x-icon"
/>
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
                    <h4 class="page-title">Revenue Verdanco Engineering</h4>
                </div>
                <!-- breadcrumb -->
                <!-- row -->

                <div class="row row-sm">
                    <!-- row closed -->

                    <!-- row opened -->
                    <div class="row row-sm">
                        <div class="col-xl-8 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="px-4 mx-auto">
                                    <div class="p-6 m-20">
                                        <div>
                                            <canvas id="myChart" style="width:100%;max-width:400px"></canvas>
                                        </div>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                        <script>
                                            var xValues = ['tercapai','target'];
                                            var yValues = @json($dataArray);
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
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="card card-dashboard-eight pb-2">
								<h6 class="card-title">Detail Revenue</h6><span class="d-block mg-b-10 text-muted tx-12">Sales performance revenue based by country</span>
								<div class="list-group border">
                                        <div class="card">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered mg-b-0 text-md-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Detail</th>
                                                                <th>Value</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Target</td>
                                                                @foreach ($revenues as $item)
                                                                    <td>Rp.{{ number_format($item->target_pertahun) }}</td>
                                                                    @break
                                                                @endforeach
                                                            </tr>
                                                            <tr>
                                                                <td>Tercapai</td>
                                                                <td>Rp.{{ number_format($item->pluck('grand_total')->sum()) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Selisih</td>
                                                                @foreach ($revenues as $item)
                                                                    @php
                                                                        $nilai1 =  $item->pluck('grand_total')->sum(); //nilai tercapai
                                                                        $nilai2 =  $item->target_pertahun; //target pertahun

                                                                        $selisih = $nilai1 - $nilai2;
                                                                    @endphp
                                                                @endforeach
                                                                <td>Rp.{{ number_format($selisih) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Persentase</td>
                                                                @foreach ($revenues as $item)
                                                                    @php
                                                                        $nilai =  $item->pluck('grand_total')->sum();
                                                                        $total =  $item->target_pertahun;
                                                                        $persentase = ceil(($nilai / $total) * 100);
                                                                    @endphp
                                                                @endforeach
                                                                <td>{{ number_format($persentase,2) }}%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
						                </div>
                                    <div class="list-group-item border-top-0" id="br-t-0">
										<i class="flag-icon flag-icon-us flag-icon-squared"></i>
                                    </div>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- row close -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /main-content -->
        </div>
        <!-- End Page -->
    </div>
</body>
