@extends('layouts.main')
@section('content')
    <!-- Loader -->
	<div id="global-loader">
		<img src="../assets/img/svgicons/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page">

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<h4 class="page-title">Admin Page</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
							<li class="breadcrumb-item active" aria-current="page">Admin Page</li>
						</ol>
					</div>
				</div>
				<!-- breadcrumb -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!-- Footer opened -->
		<div class="main-footer">
			<div class="container-fluid pd-t-0 ht-100p">
				<span> Copyright © 2022 <a href="javascript:void(0);" class="text-primary">Valex</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a>
					All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->

	</div>
	<!-- End Page -->
@endsection