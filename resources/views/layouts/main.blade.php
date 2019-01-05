<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>@yield('title','Fabio Cano') - PlaceToPaySG</title>
	<!-- Bootstrap core CSS-->
	<link href="{{ asset('startbootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="{{ asset('startbootstrap/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<link href="{{ asset('startbootstrap/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="{{ asset('startbootstrap/css/sb-admin.css') }}" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Navigation-->
		@include('layouts.partials.nav')
	<!-- contenido-->
	<div class="content-wrapper">
		<div class="container-fluid">
			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="#">{{ Auth::user()->name }}</a>
				</li>
				<li class="breadcrumb-item active">@yield('titulo','Prueba PlacetoPay')</li>
			</ol>
			@yield('content','No hay contenido para mostrar')
		</div>
		
		<footer class="sticky-footer">
			@include('layouts.partials.footer')
		</footer>
		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fa fa-angle-up"></i>
		</a>
		<!-- Logout Modal-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar sesión</a>
					</div>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf          
					</form>
				</div>
			</div>
		</div>
		<!-- Bootstrap core JavaScript-->
		<script src="{{ asset('startbootstrap/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- Core plugin JavaScript-->
		<script src="{{ asset('startbootstrap/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
		<!-- Page level plugin JavaScript-->
		<script src="{{ asset('startbootstrap/vendor/chart.js/Chart.min.js') }}"></script>
		<script src="{{ asset('startbootstrap/vendor/datatables/jquery.dataTables.js') }}"></script>
		<script src="{{ asset('startbootstrap/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
		<!-- Custom scripts for all pages-->
		<script src="{{ asset('startbootstrap/js/sb-admin.min.js') }}"></script>
		<!-- Custom scripts for this page-->
		<script src="{{ asset('startbootstrap/js/sb-admin-datatables.min.js') }}"></script>
		<script src="{{ asset('startbootstrap/js/sb-admin-charts.min.js') }}"></script>
	</div>
</body>
</html>
