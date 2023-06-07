@section('title')
	Profil
@endsection
@extends('layouts.main')
@section('content')
		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<h4 class="page-title">Pages</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
							<li class="breadcrumb-item active" aria-current="page">Profile</li>
						</ol>
					</div>
				</div>
				<!-- breadcrumb -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="ps-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="../assets/img/users/6.jpg"><a
												class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{ Auth::User()->name }}</h5>
												<p class="main-profile-name-text">{{Auth::User()->role['name']}}</p>
											</div>
										</div>
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8">
						<div class="card">
							<div class="card-body">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav nav-tabs profile navtab-custom panel-tabs">
										<li class="">
											<a href="#home" data-bs-toggle="tab" class="active" aria-expanded="true"> <span
													class="visible-xs"><i
														class="las la-user-circle tx-16 me-1"></i></span> <span
													class="hidden-xs">ABOUT ME</span> </a>
										</li>
										<li class="">
											<a href="#settings" data-bs-toggle="tab" aria-expanded="false"> <span
													class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
												<span class="hidden-xs">SETTINGS</span> </a>
										</li>
									</ul>
								</div>
								<div class="tab-content border border-top-0 p-4 br-dark">
									<div class="tab-pane active" id="home">
										<form>
											<div class="form-group">
												<label for="FullName">Full Name</label>
												<input type="text" disabled value="{{ Auth::User()->name }}" id="FullName" class="form-control">
											</div>
											<div class="form-group">
												<label for="Email">Email</label>
												<input type="email" disabled value="{{ Auth::User()->email }}" id="Email"
													class="form-control">
											</div>
											<div class="form-group">
												<label for="RePassword">Role</label>
												<input type="text" disabled value="{{ Auth::User()->role['name'] }}"
													class="form-control">
											</div>
											{{-- <button class="btn btn-primary waves-effect waves-light w-md"type="submit">Save</button> --}}
										</form>
									</div>
									<div class="tab-pane" id="settings">
										<form>
											<div class="form-group">
												<label for="FullName">Full Name</label>
												<input type="text" value="{{ Auth::User()->name }}" id="FullName" class="form-control">
											</div>
											<div class="form-group">
												<label for="Email">Email</label>
												<input type="email" value="{{ Auth::User()->email }}" id="Email"
													class="form-control">
											</div>
											<div class="form-group">
												<label for="Password">Password</label>
												<input type="password" placeholder="6 - 15 Characters" value="{{ Auth::User()->password }}" id="Password"
													class="form-control">
											</div>
											<div class="form-group">
												<label for="RePassword">Re-Password</label>
												<input type="password" placeholder="6 - 15 Characters" id="RePassword"
													class="form-control">
											</div>
											{{-- <button class="btn btn-primary waves-effect waves-light w-md"type="submit">Save</button> --}}
										</form>
										<span class="text-danger">fitur change profile masih dalam pengembangan</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection