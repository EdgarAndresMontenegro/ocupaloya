<?php require_once RUTA_RESOURCES.'/Templates/Dashboard/header.php'; ?>

<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS; ?>/pagination.css">
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS; ?>/flag-icon.min.css">
<style type="text/css">
	label{ margin-top: 10px;}
	.panel-cuadrado{ padding: 5px 8px;}
	.card{ height: auto !important }
</style>

<?php require_once RUTA_RESOURCES.'/Views/Dashboard/Configurations/tabs.php'; ?>

<div class="container">
	<div class="row d-flex">
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Formulario</h5>
					<form class="form-create" method="post" action="">
							<label for="inputIconEx1">Dirección de correo electrónico:</label>
							<input type="text" id="inputIconEx1" class="form-control">
							<label for="form1">Destinatario:</label>
							<input type="text" id="form1" class="form-control">
							<label for="form1">Asunto:</label>
							<input type="text" id="form1" class="form-control">
							<label for="exampleFormControlTextarea3">Mensaje:</label>
							<textarea class="form-control mt-2" id="exampleFormControlTextarea3" rows="7"></textarea>
						<div class="d-flex flex-row-reverse">
							<button type="button" class="btn btn-primary">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-8 mt-lg-0 mt-3">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-6 ">
							<h5 class="card-title m-0 text-truncate">Sugerencia de contenido </h5>
						</div>
						<div class="col-6 text-right">
							<p class="m-0"><span class="panel-cuadrado red text-white"><i class="fas fa-ticket-alt mr-1"></i>Ticket</span></p>
						</div>
					</div>
					
					<hr class="red">
					<p class="card-text text-truncate">Some quick example text to build on the panel title and make up the bulk of the panel's content. asjdpvafbv dsbpvadvapdfui pauisdvpf apisudpaidbv </p>
					<div class="row">
						<div class="col-6 ">
							<button type="button" class="btn btn-danger waves-effect btn-sm">Responder</button>
						</div>
						<div class="col-6 d-flex align-items-center justify-content-end">
							<P class="m-0 text-right"><i class="far fa-clock  mr-1"></i>01/06/2019</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card mt-4">
				<div class="card-body">
					<div class="row">
						<div class="col-6 ">
							<h5 class="card-title m-0 text-truncate">Sugerencia de contenido </h5>
						</div>
						<div class="col-6 text-right">
							<p class="m-0"><span class="panel-cuadrado red text-white"><i class="fas fa-ticket-alt mr-1"></i>Ticket</span></p>
						</div>
					</div>
					
					<hr class="red">
					<p class="card-text text-truncate">Some quick example text to build on the panel title and make up the bulk of the panel's content. asjdpvafbv dsbpvadvapdfui pauisdvpf apisudpaidbv </p>
					<div class="row">
						<div class="col-6 ">
							<button type="button" class="btn btn-danger waves-effect btn-sm">Responder</button>
						</div>
						<div class="col-6 d-flex align-items-center justify-content-end">
							<P class="m-0 text-right"><i class="far fa-clock  mr-1"></i>01/06/2019</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card mt-4">
				<div class="card-body">
					<div class="row">
						<div class="col-6 ">
							<h5 class="card-title m-0 text-truncate">Sugerencia de contenido </h5>
						</div>
						<div class="col-6 text-right">
							<p class="m-0"><span class="panel-cuadrado red text-white"><i class="fas fa-ticket-alt mr-1"></i>Ticket</span></p>
						</div>
					</div>
					
					<hr class="red">
					<p class="card-text text-truncate">Some quick example text to build on the panel title and make up the bulk of the panel's content. asjdpvafbv dsbpvadvapdfui pauisdvpf apisudpaidbv </p>
					<div class="row">
						<div class="col-6 ">
							<button type="button" class="btn btn-danger waves-effect btn-sm">Responder</button>
						</div>
						<div class="col-6 d-flex align-items-center justify-content-end">
							<P class="m-0 text-right"><i class="far fa-clock  mr-1"></i>01/06/2019</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card mt-4">
				<div class="card-body">
					<div class="row">
						<div class="col-6 ">
							<h5 class="card-title m-0 text-truncate">Sugerencia de contenido </h5>
						</div>
						<div class="col-6 text-right">
							<p class="m-0"><span class="panel-cuadrado red text-white"><i class="fas fa-ticket-alt mr-1"></i>Ticket</span></p>
						</div>
					</div>
					
					<hr class="red">
					<p class="card-text text-truncate">Some quick example text to build on the panel title and make up the bulk of the panel's content. asjdpvafbv dsbpvadvapdfui pauisdvpf apisudpaidbv </p>
					<div class="row">
						<div class="col-6 ">
							<button type="button" class="btn btn-danger waves-effect btn-sm">Responder</button>
						</div>
						<div class="col-6 d-flex align-items-center justify-content-end">
							<P class="m-0 text-right"><i class="far fa-clock  mr-1"></i>01/06/2019</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once RUTA_RESOURCES.'/Templates/Dashboard/footer.php'; ?>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>/pagination.js"></script>