<form name="contacto" id="contacto" novalidate>
	<div class="form-group">
		<p>Ingresa tus datos y recibe información más personalizada sobre el programa de tu interés.</p>
	</div>
	<div class="form-group">
		<input type="hidden" name="campaignId" value="<?php echo $campaignId ?>">
		<input type="text" class="form-control" name="empresa" placeholder="Empresa" required/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="cargo" placeholder="Cargo" required/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="telefono" placeholder="Teléfono de contacto" required/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="correo" placeholder="Correo Electrónico" required/>
	</div>
	<div class="form-group">
		<select name="sector" id="" class="form-control">
			<option value="" selected>Región</option>
			<option value="Antioquia">Antioquia</option>
			<option value="Eje_Cafetero">Eje Cafetero</option>
			<option value="Oriente">Oriente</option>
			<option value="Costa_Caribe">Costa Caribe</option>
			<option value="Sur_Occidente">Sur Occidente</option>
			<option value="Otros">Otros</option>
		</select>
	</div>
	<div class="checkbox">
		<label for="">
			<input type="checkbox" name="terminos" checked required> Autorizo ser contactado por teléfono y correo electrónico, y seguir recibiendo información académica por parte de la Universidad
		</label>
	</div>
	<div class="form-group">
		<input type="hidden" name="partnerId" value="<?php echo $partnerId ?>">
		<input type="hidden" name="type" value="<?php echo $type ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-sub center-block">ENVIAR FORMULARIO</button>
	</div>
</form>