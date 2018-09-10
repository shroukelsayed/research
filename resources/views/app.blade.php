<!doctype html>
<html lang="en-US">
		<head>
				<meta charset="utf-8" />
				<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
				<title>Omaar AlArd</title>
				<meta name="description" content="Survey Management System" />
				<meta name="Omaar-AlArd" content="" />

				<!-- mobile settings -->
				<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

				<!-- WEB FONTS -->
				{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" /> --}}
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">

				<!-- CORE CSS -->
				<link href="{{asset('panel/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

				<!-- THEME CSS -->
				<link href="{{asset('panel/css/essentials.css')}}" rel="stylesheet" type="text/css" />
				<link href="{{asset('panel/css/layout.css')}}" rel="stylesheet" type="text/css" />

				<link href="{{asset('panel/plugins/bootstrap/RTL/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
				<link href="{{asset('panel/plugins/bootstrap/RTL/bootstrap-flipped.min.css')}}" rel="stylesheet" type="text/css" />
				<link href="{{asset('panel/css/layout-RTL.css" rel="stylesheet" type="text/css')}}" />

				<link href="{{asset('panel/css/color_scheme/green.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />

				{{--<link href="assets/plugins/bootstrap/RTL/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />--}}
				{{--<link href="assets/plugins/bootstrap/RTL/bootstrap-flipped.min.css" rel="stylesheet" type="text/css" />--}}
				{{--<link href="assets/css/layout-RTL.css" rel="stylesheet" type="text/css" />--}}

				{{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
				<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
				<script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>

				<style>
					body{
						font-family: 'Droid Arabic Kufi', serif !important;
					}
				</style>
		</head>

		<body>
			<!-- WRAPPER -->
			<div id="wrapper">

				<!-- ASIDE, Keep it outside of #wrapper (responsive purpose) -->
				<aside id="aside">

					<!-- MAIN MENU -->
					<nav id="sideNav">
						<ul class="nav nav-list">
								<li>
									<a href="#">
										<i class="fa fa-menu-arrow pull-right"></i>
										<span>المستخدمين</span>
									</a>
									<ul>
										<a href="{{url('users')}}"><b>عرض جميع المستخدمين</b></a>
										<a href="{{url('users/create')}}"><b>اضافة مستخدم </b></a>
									</ul>
								</li>
								<li>
									<a href="#">
										<span>
										<i class="fa fa-menu-arrow pull-right"></i>
											الإستمارات
										</span>
									</a>
									<ul>
										<a href="{{url('cases')}}"><b>عرض جميع الإستمارات</b></a>
										<a href="{{url('cases/create')}}"><b>اضافة إستمارة </b></a>
										<a href="{{url('cases/filter')}}"><b>فلتره الإستمارات</b></a>
									</ul>
								</li>
								<li>
									<!-- <a href="#">
										<span>
										<i class="fa fa-menu-arrow pull-right"></i>
											الإستمارات
										</span>
									</a>
									<ul> -->
										<a href="{{url('add-governorate')}}"><b>اضافة محافظة</b></a>
										<!-- <a href="{{url('cases/create')}}"><b>اضافة إستمارة </b></a>
										<a href="{{url('cases/filter')}}"><b>فلتره الإستمارات</b></a> -->
									<!-- </ul> -->
								</li>
						</ul>
					</nav>
					<!-- MAIN MENU -->

					<span id="asidebg"><!-- aside fixed background --></span>
				</aside>

				<header id="header">

					<!-- Mobile Button -->
					<button id="mobileMenuBtn"></button>

					<!-- Logo -->
					<span class="logo pull-left">
						<img src="{{asset('panel/images/logo_light.png')}}" alt="admin panel" height="35" />
					</span>

					<nav>

						<!-- OPTIONS LIST -->
						<ul class="nav pull-right">

							<!-- USER OPTIONS -->
							<li class="dropdown pull-left">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									<img class="user-avatar" alt="" src="{{asset('panel/images/noavatar.jpg')}}" height="34" />
									<span class="user-name">
										<span class="hidden-xs">
											{{Auth::user()->name}} <i class="fa fa-angle-down"></i>
										</span>
									</span>
								</a>
								<ul class="dropdown-menu hold-on-click">
									<li>
										<a href="{{ route('logout') }}"
										   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
											Logout
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								</ul>
							</li>
							<!-- /USER OPTIONS -->

						</ul>
						<!-- /OPTIONS LIST -->

					</nav>

				</header>
				<!-- /HEADER -->


				<!-- MIDDLE -->
				<section id="middle">
					@yield('content')
				</section>
				<!-- /MIDDLE -->

			</div>

			<!-- JAVASCRIPT FILES -->
			<script type="text/javascript">var plugin_path = "{{asset('panel/plugins').'/'}}";</script>
			<script type="text/javascript" src="{{asset('panel/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
			<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			<script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
			<script type="text/javascript" src="{{asset('panel/js/app.js')}}"></script>
			@yield('scripts')
		</body>
</html>
