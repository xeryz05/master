
@section('title')
    Dashboard VE
@endsection
@extends('layouts.main')
{{-- @extends('admin.dashboard') --}}
@section('style')
    <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<style>
    .slick-prev:before, .slick-next:before{
        color:rgba(99, 97, 97, 0.285);
    }
    .slick-prev, .slick-next {
        top: 240px;
        bottom: 100px;
        right: 35px;
        z-index: 10;
    }
    .slick-prev {
        left: 5px;
    
    }
    .slick-next {
        right: 5px;
    }
</style>
<link href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-html5-2.3.6/fc-4.2.2/r-2.4.1/datatables.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <!-- breadcrumb -->
                            <div class="breadcrumb-header justify-content-center">
                                <h4 class="page-title">Verdanco Engineering 2023</h4>
                            </div>
                            <div class="responsive">
                                <div class="col-md mg-md-t-0">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- revenue VE Januari--}}
                                            <div class="my-3">
                                                <h3 class="card-title tx-dark tx-medium mg-b-10 font-weight-bold text-center">Januari</h3>
                                                <h6 class="card-text bd-t">Revenue</h6>
                                                    @foreach ($verevenues as $item)
                                                        <span class="card-text">Tercapai :Rp.{{ number_format($item->pluck('value_jan')->sum()) }}</span><br>
                                                    @break
                                                @endforeach
                                                @foreach ($verevenues as $item)
                                                    @php
                                                        $nilai =   $item->sum('value_jan'); //total perbulan
                                                        $total =  $item->target_perbulan; //target perbulan
                                                        $persentase = ceil(($nilai / $total) * 100);
                                                        $persentase = number_format($persentase, 2); // Menggunakan fungsi number_format() dengan 2 desimal
                                                    @endphp
                                                @break
                                                @endforeach
                                                <span class="">Persentasi: {{ $persentase }}%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $persentase > 60 ? $persentase> 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width: {{ $persentase }}%" aria-valuenow="{{ $persentase }}" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>{{ $persentase }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end revenue VE januari --}}
                                            {{-- Net Profit VE januari --}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Net Profit</h6>
                                                <span class="card-text">Tercapai : 8%</span><br>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            {{-- <progress class="progress-bar w-100" id="myProgress" value="2" max="10" style="accent-color: #22c03c">
                                                                <p>sasd</p>
                                                            </progress> --}}
                                                            
                                                            @if ($item->persentase < 6)
                                                                <progress class="w-100" style="accent-color: red;" value="9" max="10"></progress>
                                                            @elseif ($item->persentase < 8)
                                                                <progress class="w-100" style="progress::-webkit-progress-value { background: blue; }" value="9" max="10"></progress>
                                                            @else
                                                                <progress class="w-100" style="accent-color: green;" value="9" max="10"></progress>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Net Profit VE januari--}}
                                            {{-- Physical Availability VE januari--}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Physical Availability</h6>
                                                {{-- <span class="card-text">Tercapai : {{ $item->persentase }}%</span><br> --}}
                                                <span class="">Persentasi : -%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $item->persentase > 60 ? $item->persentase > 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>0%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Physical Availability VE januari --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md mg-md-t-0">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- revenue VE februari --}}
                                            <div class="my-3">
                                                <h3 class="card-title tx-dark tx-medium mg-b-10 font-weight-bold text-center">Februari</h3>
                                                <h6 class="card-text bd-t">Revenue</h6>
                                                    @foreach ($verevenues as $item)
                                                        <span class="card-text">Tercapai :Rp.{{ number_format($item->pluck('value_feb')->sum()) }}</span><br>
                                                    @break
                                                @endforeach
                                                @foreach ($verevenues as $item)
                                                    @php
                                                        $nilai =   $item->sum('value_feb'); //total perbulan
                                                        $total =  $item->target_perbulan; //target perbulan
                                                        $persentase = ceil(($nilai / $total) * 100);
                                                        $persentase = number_format($persentase, 2); // Menggunakan fungsi number_format() dengan 2 desimal
                                                    @endphp
                                                @break
                                                @endforeach
                                                <span class="">Persentasi: {{ $persentase }}%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $persentase > 60 ? $persentase> 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width: {{ $persentase }}%" aria-valuenow="{{ $persentase }}" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>{{ $persentase }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end revenue VE februari --}}
                                            {{-- Net Profit VE februari --}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Net Profit</h6>
                                                <span class="card-text">Tercapai : 8%</span><br>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            {{-- <progress class="progress-bar w-100" id="myProgress" value="2" max="10" style="accent-color: #22c03c">
                                                                <p>sasd</p>
                                                            </progress> --}}
                                                            
                                                            @if ($item->persentase < 6)
                                                                <progress class="w-100" style="accent-color: red;" value="9" max="10"></progress>
                                                            @elseif ($item->persentase < 8)
                                                                <progress class="w-100" style="progress::-webkit-progress-value { background: blue; }" value="9" max="10"></progress>
                                                            @else
                                                                <progress class="w-100" style="accent-color: green;" value="9" max="10"></progress>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Net Profit VE februari --}}
                                            {{-- Physical Availability VE februari --}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Physical Availability</h6>
                                                <span class="">Persentasi : 0%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $item->persentase > 60 ? $item->persentase > 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>0%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Physical Availability VE februari --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md mg-md-t-0">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- revenue VE maret --}}
                                            <div class="my-3">
                                                <h3 class="card-title tx-dark tx-medium mg-b-10 font-weight-bold text-center">Maret</h3>
                                                <h6 class="card-text bd-t">Revenue</h6>
                                                    @foreach ($verevenues as $item)
                                                        <span class="card-text">Tercapai :Rp.{{ number_format($item->pluck('value_mar')->sum()) }}</span><br>
                                                    @break
                                                @endforeach
                                                @foreach ($verevenues as $item)
                                                    @php
                                                        $nilai =   $item->sum('value_mar'); //total perbulan
                                                        $total =  $item->target_perbulan; //target perbulan
                                                        $persentase = ceil(($nilai / $total) * 100);
                                                        $persentase = number_format($persentase, 2); // Menggunakan fungsi number_format() dengan 2 desimal
                                                    @endphp
                                                @break
                                                @endforeach
                                                <span class="">Persentasi: {{ $persentase }}%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $persentase > 60 ? $persentase> 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width: {{ $persentase }}%" aria-valuenow="{{ $persentase }}" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>{{ $persentase }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end revenue VE maret --}}
                                            {{-- Net Profit VE maret --}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Net Profit</h6>
                                                <span class="card-text">Tercapai : 8%</span><br>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            {{-- <progress class="progress-bar w-100" id="myProgress" value="2" max="10" style="accent-color: #22c03c">
                                                                <p>sasd</p>
                                                            </progress> --}}
                                                            
                                                            @if ($item->persentase < 6)
                                                                <progress class="w-100" style="accent-color: red;" value="9" max="10"></progress>
                                                            @elseif ($item->persentase < 8)
                                                                <progress class="w-100" style="progress::-webkit-progress-value { background: blue; }" value="9" max="10"></progress>
                                                            @else
                                                                <progress class="w-100" style="accent-color: green;" value="9" max="10"></progress>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Net Profit VE maret --}}
                                            {{-- Physical AvailabilityVE maret --}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Physical Availability</h6>
                                                <span class="">Persentasi : 47.37%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $item->persentase > 60 ? $item->persentase > 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width: 47.37%" aria-valuenow="47.37%" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>47.37%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Physical Availability VE maret --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md mg-md-t-0">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- revenue VE april --}}
                                            <div class="my-3">
                                                <h3 class="card-title tx-dark tx-medium mg-b-10 font-weight-bold text-center">April</h3>
                                                <h6 class="card-text bd-t">Revenue</h6>
                                                    @foreach ($verevenues as $item)
                                                        <span class="card-text">Tercapai :Rp.{{ number_format($item->pluck('value_apr')->sum()) }}</span><br>
                                                    @break
                                                @endforeach
                                                @foreach ($verevenues as $item)
                                                    @php
                                                        $nilai =   $item->sum('value_apr'); //total perbulan
                                                        $total =  $item->target_perbulan; //target perbulan
                                                        $persentase = ceil(($nilai / $total) * 100);
                                                        $persentase = number_format($persentase, 2); // Menggunakan fungsi number_format() dengan 2 desimal
                                                    @endphp
                                                @break
                                                @endforeach
                                                <span class="">Persentasi: {{ $persentase }}%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $persentase > 60 ? $persentase> 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width: {{ $persentase }}%" aria-valuenow="{{ $persentase }}" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>{{ $persentase }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end revenue VE april --}}
                                            {{-- Net Profit VE april --}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Net Profit</h6>
                                                <span class="card-text">Tercapai : 8%</span><br>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            {{-- <progress class="progress-bar w-100" id="myProgress" value="2" max="10" style="accent-color: #22c03c">
                                                                <p>sasd</p>
                                                            </progress> --}}
                                                            
                                                            @if ($item->persentase < 6)
                                                                <progress class="w-100" style="accent-color: red;" value="9" max="10"></progress>
                                                            @elseif ($item->persentase < 8)
                                                                <progress class="w-100" style="progress::-webkit-progress-value { background: blue; }" value="9" max="10"></progress>
                                                            @else
                                                                <progress class="w-100" style="accent-color: green;" value="9" max="10"></progress>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Net Profit VE april--}}
                                            {{-- Physical Availability VE april--}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Physical Availability</h6>
                                                <span class="">Persentasi : 59.54%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $item->persentase > 60 ? $item->persentase > 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width:59.54%" aria-valuenow="59.54%" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>59.54%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Physical Availability VE april --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md mg-md-t-0">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- revenue VE mei --}}
                                            <div class="my-3">
                                                <h3 class="card-title tx-dark tx-medium mg-b-10 font-weight-bold text-center">Mei</h3>
                                                <h6 class="card-text bd-t">Revenue</h6>
                                                    @foreach ($verevenues as $item)
                                                        <span class="card-text">Tercapai :Rp.{{ number_format($item->pluck('value_mei')->sum()) }}</span><br>
                                                    @break
                                                @endforeach
                                                @foreach ($verevenues as $item)
                                                    @php
                                                        $nilai =   $item->sum('value_mei'); //total perbulan
                                                        $total =  $item->target_perbulan; //target perbulan
                                                        $persentase = ceil(($nilai / $total) * 100);
                                                        $persentase = number_format($persentase, 2); // Menggunakan fungsi number_format() dengan 2 desimal
                                                    @endphp
                                                @break
                                                @endforeach
                                                <span class="">Persentasi: {{ $persentase }}%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $persentase > 60 ? $persentase> 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width: {{ $persentase }}%" aria-valuenow="{{ $persentase }}" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>{{ $persentase }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end revenue VE mei --}}
                                            {{-- Net Profit VE mei --}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Net Profit</h6>
                                                <span class="card-text">Tercapai : 8%</span><br>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            {{-- <progress class="progress-bar w-100" id="myProgress" value="2" max="10" style="accent-color: #22c03c">
                                                                <p>sasd</p>
                                                            </progress> --}}
                                                            
                                                            @if ($item->persentase < 6)
                                                                <progress class="w-100" style="accent-color: red;" value="9" max="10"></progress>
                                                            @elseif ($item->persentase < 8)
                                                                <progress class="w-100" style="progress::-webkit-progress-value { background: blue; }" value="9" max="10"></progress>
                                                            @else
                                                                <progress class="w-100" style="accent-color: green;" value="9" max="10"></progress>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Net Profit VE mei--}}
                                            {{-- Physical Availability VE mei--}}
                                            <div class="my-3">
                                                <h6 class="card-text bd-t">Physical Availability</h6>
                                                <span class="">Persentasi : 0%</span>
                                                <div class="container">
                                                    <div class="row mt-3 text-center">
                                                        <div class="col-12">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-{{ $item->persentase > 60 ? $item->persentase > 80 ? 'success' : 'warning' : 'danger' }}" role="progressbar" style="width:0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                    <span>0%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end Physical Availability VE mei --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table  class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>KPI</th>
                                                    <th>Bobot</th>
                                                    <th>Target</th>
                                                    <th>Target Perbulan</th>
                                                    <th>Tercapai</th>
                                                    <th>Nilai Akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Revenue Perusahaan</td>
                                                    <td>40%</td>
                                                    <td>Rp. 42,000,000,000</td>
                                                    <td>Rp. 3,500,000,000</td>
                                                    <@foreach ($verevenues as $item)
                                                        <td>Rp.{{ number_format($item->pluck('grand_total')->sum()) }}</td>
                                                        @break
                                                    @endforeach
                                                    @foreach ($verevenues as $item)
                                                        @php
                                                            $nilai =  $item->pluck('grand_total')->sum();
                                                            $total =  $item->target_pertahun;
                                                            $persentase = ceil(($nilai / $total) * 100);
                                                        @endphp
                                                    @endforeach
                                                    <td>{{ $persentase }}%</td>
                                                </tr>
                                                {{-- <tr>
                                                    <td>Physical Availability</td>
                                                    <td>30%</td>
                                                    <td>Rp. 42,000,000,000</td>
                                                    <td>Rp. 2,000,000,000</td>
                                                    @foreach ($verevenues as $item)
                                                        <td>Rp.{{ number_format($item->pluck('grand_total')->sum()) }}</td>
                                                        @break
                                                    @endforeach
                                                    <td>14%</td>
                                                </tr>     --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                        <span class="d-flex justify-content-center">Last Update | 5 Mei 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tipe Pekerjaan</th>
                                            @foreach ($periods as $item)
                                                <th scope="col">{{ $item->month }}</th>
                                            @endforeach
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($verevenues as $item)
                                            <tr>
                                                <td scope="row">#</td>
                                                {{-- <td style="width: 1%">1</td> --}}
                                                <td>{{ $item->type_jobs }}</td>
                                                <td>Rp.{{ number_format($item->value_jan) }}</td>
                                                <td>Rp.{{ number_format($item->value_feb) }}</td>
                                                <td>Rp.{{ number_format($item->value_mar) }}</td>
                                                <td>Rp.{{ number_format($item->value_apr) }}</td>
                                                <td>Rp.{{ number_format($item->value_mei) }}</td>
                                                <td>Rp.{{ number_format($item->grand_total) }}</td>
                                            </tr>
                                        @endforeach
                                            <tr>
                                                <td scope="row">Grand Total</td>
                                                <td ></td>
                                                {{-- <td style="width: 1%">1</td> --}}
                                                <td>Rp.{{ number_format($item->pluck('value_jan')->sum()) }}</td>
                                                <td>Rp.{{ number_format($item->pluck('value_feb')->sum()) }}</td>
                                                <td>Rp.{{ number_format($item->pluck('value_mar')->sum()) }}</td>
                                                <td>Rp.{{ number_format($item->pluck('value_apr')->sum()) }}</td>
                                                <td>Rp.{{ number_format($item->pluck('value_mei')->sum()) }}</td>
                                                <td>Rp.{{ number_format($item->pluck('grand_total')->sum()) }}</td>
                                            </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Target</th>
                                            <th>Selisih</th>
                                            <th>Tercapai</th>
                                        </tr>
                                        <tr>
                                            <td>Rp.{{ number_format($item->target_pertahun) }}</td>
                                            @foreach ($verevenues as $item)
                                                @php
                                                    $nilai1 =  $item->pluck('grand_total')->sum(); //nilai tercapai
                                                    $nilai2 =  $item->target_pertahun; //target pertahun

                                                    $selisih = $nilai1 - $nilai2;
                                                @endphp
                                            @endforeach
                                            <td>Rp.{{ number_format($selisih) }}</td>
                                            <td>Rp.{{ number_format($item->pluck('grand_total')->sum()) }}</td>
                                            {{-- <td>Rp. {{ number_format($item->grand_total) }}</td> --}}
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <div class="" style="margin-right: 5px">
                                                        <a class="btn btn-primary btn-sm" target=”_blank” href="https://docs.google.com/spreadsheets/d/1BgHIC7aGju2_jBszLOIEtZSyE2_cBFLt/edit?usp=sharing&ouid=112597684337503883800&rtpof=true&sd=true">Link Excel</a>
                                                    </div>
                                                    <div class="">
                                                        <a class="btn btn-info btn-sm" href="/dashboardVE/grafik">Grafik</a>   
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>               
                                </div>
                                <div class="card-footer">
                                    <span class="d-flex justify-content-center">Last Update | 5 Mei 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
            @section('script')
                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-html5-2.3.6/fc-4.2.2/r-2.4.1/datatables.min.js"></script>
                <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                <script type="text/javascript">
                   $('.responsive').slick({
                        dots: true,
                        infinite: false,
                        speed: 300,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        responsive: [
                            {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: true
                            }
                            },
                            {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                            },
                            {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                            }
                        ]
                        });
                </script>
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ]
                        } );
                    } );
                </script>
            @endsection
@endsection