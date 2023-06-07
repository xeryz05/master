@extends('layouts.main')
{{-- @extends('admin.dashboard') --}}
@section('style')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/fc-4.2.2/fh-3.3.2/r-2.4.1/sc-2.1.1/datatables.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<h4 class="page-title">Table Revenues</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0);">Revenue Verdanco Indonesia</a></li>
							<li class="breadcrumb-item active" aria-current="page">Table Revenues</li>
						</ol>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center">
                        <div class="pe-1 mb-xl-0">
                            <a href="#" class="btn btn-primary">Create Data</a>
                        </div>

                        <!-- Button trigger modal -->
                        <div class="pe-1 mb-xl-0">
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Import
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Input Revenue</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('revenue.import') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input name="file" type="file">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                        <div class="pe-1 mb-xl-0">
                            <a href="{{ route('revenue.export') }}" target="_blank" class="btn btn-warning">Export Data</a>
                        </div>
                    </div>
				</div>
				<!-- breadcrumb -->
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Revenue Verdanco Indonesia</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name Company</th>
                                                    <th>Tipe Pekerjaan</th>
                                                    <th>Target Pertahun</th>
                                                    <th>Januari</th>
                                                    <th>Februari</th>
                                                    <th>Maret</th>
                                                    <th>April</th>
                                                    <th>April</th>
                                                    <th>Target Perbulan</th>
                                                    <th>Persentase</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($revenues as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        {{-- <td>{{ $item->id }}</td> --}}
                                                        <td>{{ $item->company['name'] }}</td>
                                                        <td></td>
                                                        <td>{{ $item->type_jobs }}</td>
                                                        <td>Rp. {{ $item->target_pertahun }}</td>
                                                        <td>Rp. {{ $item->value_jan }}</td>
                                                        <td>Rp. {{ $item->value_feb }}</td>
                                                        <td>Rp. {{ $item->value_mar }}</td>
                                                        <td>Rp. {{ $item->value_apr }}</td>
                                                        <td>Rp. {{ $item->target_perbulan }}</td>
                                                        <td>{{ $item->persentase }}%</td>
                                                        <td>
                                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('revenue_verdanco_indonesia.destroy', $item->id) }}" method="POST">
                                                                <a href="{{ route('revenue_verdanco_indonesia.edit', $item->id) }}" class="btn btn-sm btn-primary"><span class="fe fe-edit"></span></a>
                                                                <a href="{{ route('revenue_verdanco_indonesia.show', $item->id) }}" class="btn btn-sm btn-info"><span class="fe fe-more-vertical"></span></a>
                                                            
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-danger"><span class="fe fe-trash-2"></span></button>
                                                            </form>
                                                        </td>
                                                    </tr>    
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
@endsection
@section('script')
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/fc-4.2.2/fh-3.3.2/r-2.4.1/sc-2.1.1/datatables.min.js"></script>  
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });    
    </script> 
@endsection



{{-- 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    {{-- <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

    <title>DataTable</title>
  </head>
  <body>
    <div class="container">
        <div class="my-5">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Company</th>
                        <th>target Pertahun</th>
                        <th>target Perbulan</th>
                        <th>Persentase</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($revenues as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->company['name'] }}</td>
                            <td>{{ $item->target_tahun }}</td>
                            <td>{{ $item->target_bulan }}</td>
                            <td>{{ $item->persentase }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
  </body>
</html> --}}