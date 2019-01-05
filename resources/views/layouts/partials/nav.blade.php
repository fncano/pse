	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="index.html">Prueba pagos PSE</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				<li class="nav-item" data-toggle="tooltip" data-placement="right">
					<a class="nav-link" href="{{ route('inicio.index') }}">
						<i class="fa fa-bank"></i>
						<span class="nav-link-text">Listar Bancos</span>
					</a>
					<a class="nav-link" href="{{ route('inicio.list') }}">
						<i class="fa fa-bars"></i>
						<span class="nav-link-text">Mis transacciones</span>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a class="nav-link text-center" id="sidenavToggler">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-fw fa-sign-out"></i>Cerrar sesion</a>
				</li>
				<li class="nav-item">
					<a class="nav-link"><i class="fa fa-fw fa-user"></i>{{ Auth::user()->name }}</a>
				</li>
			</ul>
		</div>
	</nav>
	