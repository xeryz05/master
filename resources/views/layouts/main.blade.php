<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Favicon -->
        <link
            rel="icon"
            href="{{ asset('assets/img/logo/verdanco-title.png') }}"
            type="image/x-icon"
        />
		<!-- Title -->
		<title> @yield('title') - Verdanco Group </title>

		<!-- Icons css -->
		<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

		<!-- Bootstrap css -->
		<link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- style css -->
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">

		<!--- Animations css-->
		<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
		
		@yield('style')

	</head>

	<body class="main-body app sidebar-mini ltr">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('assets/img/svgicons/loader.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page custom-index">
			<div>
				<!-- main-header -->
				<div class="main-header side-header sticky nav nav-item">
					<div class="container-fluid main-container ">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="index.html" class="header-logo">
									<img src="{{ asset('assets/img/logo/verdanco-removebg-preview.png') }}" class="logo-1" alt="logo">
									<img src="{{ asset('assets/img/logo/verdanco-removebg-preview.png') }}" class="dark-logo-1" alt="logo">
								</a>
							</div>
							<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
								<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="javascript:void(0);"><i class="header-icons fe fe-x"></i></a>
							</div>
						</div>
						<div class="main-header-right">
							<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical "></span>
							</button>
							<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
								<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
									<ul class="nav nav-item  navbar-nav-right ms-auto">
										<li class="dropdown nav-item main-layout">
											<a class="new nav-link theme-layout nav-link-bg layout-setting" >
												<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>
												<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>
											</a>
										</li>
										<li class="nav-item full-screen fullscreen-button">
											<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
										</li>
										<li class="dropdown main-profile-menu nav nav-item nav-link">
											<a class="profile-user d-flex" href=""><img alt="" src="../assets/img/users/6.jpg"></a>
											<div class="dropdown-menu">
												<div class="main-header-profile bg-primary p-3">
													<div class="d-flex wd-100p">
														<div class="main-img-user"><img alt="" src="../assets/img/users/6.jpg" class=""></div>
														<div class="ms-3 my-auto">
															<h6>{{ Auth::user()->name }}</h6>
														</div>
													</div>
												</div>
												<a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
												<a class="dropdown-item" href="{{ route('logout') }}"><i class="bx bx-log-out"></i> Sign Out</a>
											</div>
										</li>
										<li class="dropdown main-header-message right-toggle">
											{{-- <a class="nav-link pe-0" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
											</a> --}}
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /main-header -->

				<!-- main-sidebar -->
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<div class="sticky">
					<aside class="app-sidebar sidebar-scroll">
						<div class="main-sidebar-header active">
							<a class="desktop-logo logo-light active" href="index.html"><img src="{{ asset('assets/img/logo/verdanco-removebg-preview.png') }}" class="main-logo" alt="logo"></a>
							<a class="desktop-logo logo-dark active" href="index.html"><img src="{{ asset('assets/img/logo/verdanco-removebg-preview.png') }}" class="main-logo" alt="logo"></a>
							<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="{{ asset('assets/img/logo/verdanco-title.png') }}" alt="logo"></a>
							<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="{{ asset('assets/img/logo/verdanco-title.png') }}" alt="logo"></a>
						</div>
						<div class="main-sidemenu">
							<div class="app-sidebar__user clearfix">
								<div class="dropdown user-pro-body">
								</div>
							</div>
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
							<ul class="side-menu">
								<li class="side-item side-item-category">Dashboard KPI</li>
								<li class="slide">
									<a class="side-menu__item {{ Request::routeIs('dashboardVI.index') ?  'active' : '' }}" href="{{ route('dashboardVI.index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Verdanco Indonesia</span></a>
								</li>
								<li class="slide">
									<a class="side-menu__item {{ Request::routeIs('dashboardVE.index') ?  'active' : '' }}" href="{{ route('dashboardVE.index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Verdanco Engineering</span></a>
								</li>
								<li class="side-item side-item-category">KPI Corporate</li>
								<li class="slide">
									<a class="side-menu__item {{ Request::is('verdancoKPI*') ? 'active' : '' }}" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">KPI Verdanco Indonesia</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side14">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">KPI Corporate</a></li>
															<li><a class="slide-item" href="/revenueVI">Revenue VI</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">KPI Verdanco Engineering</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side14">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">KPI Corporate</a></li>
															<li><a class="slide-item" href="/revenueVE">Revenue</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/><path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/></svg><span class="side-menu__label">KPI Departement</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side26">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Menu-Levels</a></li>
															<li class="sub-slide">
																<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Verdanco Indonesia</span><i class="sub-angle fe fe-chevron-down"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-side-menu__item" href="javascript:void(0);">-</a></li>
																	<li><a class="sub-side-menu__item" href="javascript:void(0);">-</a></li>
																</ul>
															</li>
															<li class="sub-slide">
																<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Verdanco Engineering</span><i class="sub-angle fe fe-chevron-down"></i></a>
																<ul class="sub-slide-menu">
																	<li><a class="sub-side-menu__item" href="javascript:void(0);">-</a></li>
																	<li><a class="sub-side-menu__item" href="javascript:void(0);">-</a></li>
																</ul>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								@can(['isAdmin'])
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg><span class="side-menu__label">Admin Pages</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side41">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Admin Pages</a></li>
															<li><a class="slide-item" href="{{ route('users.index') }}">User Management</a></li>
															<li><a class="slide-item" href="{{ route('companies.index') }}">Company Management</a></li>
															<li><a class="slide-item" href="{{ route('departements.index') }}">Departement Management</a></li>
															<li><a class="slide-item" href="{{ route('roles.index') }}">Role Management</a></li>
															<li><a class="slide-item" href="{{ route('revenue_verdanco_indonesia.index') }}">Revenue Verdanco Indonesia</a></li>
															<li><a class="slide-item" href="{{ route('revenue_verdanco_engineering.index') }}">Revenue Verdanco Engineering</a></li>
															<li><a class="slide-item" href="{{ route('periods.index') }}">Periode</a></li>
															<li><a class="slide-item" href="{{ route('type_jobs.index') }}">Tipe Pekerjaan</a></li>
															<li><a class="slide-item" href="{{ route('PA.index') }}">Physical Availability</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="side-item side-item-category">WEB APPS</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg><span class="side-menu__label">Advanced UI</span><i class="angle fe fe-chevron-down"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane tab-content-show active" id="side23">
														<ul class="sidemenu-list">
															<li class="side-menu__label1"><a href="javascript:void(0);">Advanced Ui</a></li>
															<li><a class="slide-item" href="/switcher">Switcher</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								@endcan
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->
			</div>

			<!-- main-content -->
			@yield('content')
			<!-- /main-content -->

			<!-- Footer opened -->
			<div class="main-footer">
				<div class="container-fluid pd-t-0 ht-100p">
					<span> 2023 © Copyright Verdanco Group | Alpha Version</span>
				</div>
			</div>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Internal  Chart.bundle js -->
		<script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>

		<!-- Moment js -->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--Internal Sparkline js -->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!-- Moment js -->
		<script src="../assets/plugins/raphael/raphael.min.js"></script>

		<!--Internal Apexchart js-->
		<script src="../assets/js/apexcharts.js"></script>

		<!--Internal  Perfect-scrollbar js -->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Eva-icons js -->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!-- right-sidebar js -->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Sticky js -->
		<script src="../assets/js/sticky.js"></script>
		<script src="../assets/js/modal-popup.js"></script>

		<!-- Left-menu js-->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!-- Internal Map -->
		<script src="../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

		<!--Internal  index js -->
		<script src="../assets/js/index.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!-- Apexchart js-->
		<script src="../assets/js/apexcharts.js"></script>
		<script src="../assets/js/jquery.vmap.sampledata.js"></script>

		<!-- custom js -->
		<script src="../assets/js/custom.js"></script>

		<!-- switcher-styles js -->
		<script src="../assets/js/swither-styles.js"></script>

		@yield('script')

	</body>
</html>