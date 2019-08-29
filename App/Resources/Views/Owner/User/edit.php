<?php require_once RUTA_RESOURCES.'/Templates/Owner/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS; ?>/croppie.css">


<!-- contenido de la vista -->
<div class="container-fluid container-main">
	<form class="form-edit" method="post" action="<?php echo RUTA_URL; ?>/Owner/User/Update">
		<?php echo $this->csrfToken(); ?>
		<div class="errors-edit pt-2 text-center white-text"></div>
		<div class="container pb-5">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="row">
						<div class="col-12 mt-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">
										<span class="raleway-regular">Perfil</span>
										<button type="submit" class="btn btn-primary btn-sm float-right">
											Guardar
										</button>
										<a class="btn btn-danger btn-sm float-right" href="<?php echo RUTA_URL; ?>/Owner/User/Profile">
											Regresar
										</a>
									</h5>
									<input type="hidden" name="id" value="<?php echo $params['user']['id']; ?>">
									<div class="row align-items-center my-4  mt-5">
										<div class="col-12 mb-4 d-flex justify-content-center">
											<div class="contenedor-picture"  style="border-radius: 50%; max-width: 120px;  max-height: 120px; overflow: hidden;">
												<label for="upload_image" class="image-cap" style="background-image: url(<?php echo RUTA_IMG; ?>/upload-picture.png);" title="Cambiar foto" data-toggle="tooltip"></label>
												<img src="<?php echo RUTA_IMG; ?>/users/<?php echo $params['user']['icon']; ?>" class="img-fluid photo-user" style="max-width: 120px;  max-height: 120px;">
												<input type="file" name="upload_image" id="upload_image" style="display: none;">
												<input type="hidden" class="input_crop_image" name="photo" id="photo" value="<?php echo $params['user']['icon']; ?>">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" placeholder="Primer nombre (*)" value="<?php echo ucwords($params['user']['name']); ?>">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<select id="sex" name="sex" class="browser-default form-control">
													<option>-- Seleccione un sexo --</option>
													<option <?php if($params['userdata']['sex'] == 1 ){ echo 'selected'; } ?> value="1">Hombre</option>
													<option <?php if($params['userdata']['sex'] == 2 ){ echo 'selected'; } ?> value="2">Mujer</option>
												</select>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-group">
												<input type="number" name="telephone" id="telephone" class="form-control" placeholder="Teléfono" value="<?php echo $params['userdata']['telephone']; ?>">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mt-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">
										<span class="raleway-regular">Ubicación</span>
									</h5>
									<div class="row align-items-center mt-4 mb-1">
										<div class="col-12">
											<div class="row align-items-center justify-content-between">
												<div class="col-5">
													Departamento/Estado
												</div>
												<div class="col-7">
													<select id="state_id" name="state_id" class="browser-default form-control" data-url="<?php echo RUTA_URL; ?>/Location/find-city-by-state-id">
														<option>-- Seleccione un país --</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-12"> <hr style="border-style: dashed; border-color: #ccc;"> </div>
										<div class="col-12">
											<div class="row align-items-center justify-content-between">
												<div class="col-5">
													Ciudad (*)
												</div>
												<div class="col-7">
													<select id="city_id" name="city_id" class="browser-default form-control">
														<option>-- Seleccione una ciduad --</option>
														<?php 
															foreach ($params['cities'] as $city) 
															{
																$selected = "";
																if( $city['id'] == $params['userdata']['city_id'] )
																	$selected = "selected";
																echo "<option ".$selected ." value='".$city['id']."'>".ucwords( $city['name'] )."</option>";
															} 
														?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-12"> <hr style="border-style: dashed; border-color: #ccc;"> </div>
										<div class="col-12">
											<div class="row align-items-center justify-content-between">
												<div class="col-5">
													Dirección
												</div>
												<div class="col-7">
													<input type="text" id="address" name="address" class="browser-default form-control" placeholder="Dirección" value="<?php echo ucwords($params['userdata']['address']); ?>" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="row">
						<div class="col-12 mt-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">
										<span class="raleway-regular">Correo electrónico vinculado</span>
									</h5>
									<div class="row align-items-center mt-4 mb-1">
										<div class="col-12">
											<div class="form-group">
												<input type="email" name="username" id="username" class="form-control validate_crop_image" placeholder="example@hyperlinkse.com" value="<?php echo $params['user']['username']; ?>">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mt-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title justify-content-between d-flex">
										<span class="raleway-regular">Contraseña</span>
										<span data-toggle="popover" title="Actualizar contraseña" data-placement="top" data-content="Para poder actualizar su contraseña, basta con escribir una nueva. Si desea permanecer con la que ya cuenta solo debe evitar escribir en el campo de texto." class="text-primary h6" style="cursor: pointer;">
											<i class="fa fa-question-circle"></i> Ayuda
										</span>
									</h5>
									<div class="row align-items-center mt-4 mb-1">
										<div class="col-12">
											<div class="form-group">
												<input type="password" name="password" id="password" class="form-control" placeholder="********" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mt-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">
										<span class="raleway-regular">Detalles de cuenta</span>
									</h5>
									<div class="row align-items-center mt-4">
										<div class="col-12">
											<div class="row align-items-center justify-content-between">
												<div class="col-5">
													Nacionalidad
												</div>
												<div class="col-7">
													<select id="country_id" name="country_id" class="browser-default form-control" data-url="<?php echo RUTA_URL; ?>/Location/find-state-by-country-id">
														<option>-- Seleccione un país --</option>
														<?php 
															foreach ($params['countries'] as $country) 
															{
																echo "<option value='".$country['id']."'>".ucwords( $country['name'] )."</option>";
															} 
														?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-12"> <hr style="border-style: dashed; border-color: #ccc;"> </div>
										<div class="col-12">
											<div class="row align-items-center justify-content-between">
												<div class="col-5">
													Tipo de documento
												</div>
												<div class="col-7">
													<select id="document_type" name="document_type" class="browser-default form-control">
														<option <?php if($params['userdata']['document_type'] == 1 ){ echo 'selected'; } ?>  value="1">Cédula de ciudadania</option>
														<option <?php if($params['userdata']['document_type'] == 2 ){ echo 'selected'; } ?>  value="2">Tarjeta de identidad</option>
														<option <?php if($params['userdata']['document_type'] == 3 ){ echo 'selected'; } ?>  value="3">Cédula de extranjeria</option>
														<option <?php if($params['userdata']['document_type'] == 4 ){ echo 'selected'; } ?>  value="4">Pasaporte</option>
														<option <?php if($params['userdata']['document_type'] == 5 ){ echo 'selected'; } ?>  value="5">Visa</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-12"> <hr style="border-style: dashed; border-color: #ccc;"> </div>
										<div class="col-12">
											<div class="row align-items-center justify-content-between">
												<div class="col-5">
													Número documento
												</div>
												<div class="col-7">
													<input type="number" id="document_number" name="document_number" class="browser-default form-control" placeholder="123456789" value="<?php echo $params['userdata']['document_number']; ?>" />
												</div>
											</div>
										</div>
										<div class="col-12"> <hr style="border-style: dashed; border-color: #ccc;"> </div>
										<div class="col-12">
											<div class="row align-items-center justify-content-between">
												<div class="col-5">
													Fecha de nacimiento
												</div>
												<div class="col-7">
													<input type="date" id="birth_date" name="birth_date" class="browser-default form-control" value="<?php echo $params['userdata']['birth_date']; ?>"  />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- fin contenido de la vista -->
<div class="modal fade" id="uploadimageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
	<div class="modal-dialog mt-5" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Recortar y guardar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<div id="image_crop" style="width: 300px; height: 300px;"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
				<button class="btn btn-sm btn-success crop_button" data-action="<?php echo RUTA_URL; ?>/Owner/User/uploadPhoto">Recortar</button>
			</div>
		</div>
	</div>
</div>

<?php require_once RUTA_RESOURCES.'/Templates/Owner/footer.php'; ?>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>/location.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>/croppie.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>/exif.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS; ?>/crop_image.js"></script>