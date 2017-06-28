<header class="header">
	<nav class="header-nav">
		<h1 class="header-nav-name">GIMNASIO</h1>
		<img srcset="img/gimnasio_brita_nico_logo.png, img/gimnasio_brita_nico_logo@2x.png" class="header-nav-logo" alt="Logo">
		<h1 class="header-nav-name">BRITÁNICO</h1>
	</nav>
</header>

<div class="modal fade" id="cta" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center">Conoce nuestras instalaciónes. ¡Agenda tu cita!</h4>
			</div>
			<div class="modal-body">
				<form class="form-inline" id="formularioDos">
					<div class="form-group">
						<input type="text" class="form-control" name="nombrePadre" id="nombrePadre" placeholder="Nombre del padre" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nombreAlumno" id="nombreAlumno" placeholder="Nombre del Alumno" required/>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="edadAlumno" id="edadAlumno" placeholder="Edad del alumno" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="curso" id="curso" placeholder="Curso al que aspira" required/>
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Teléfono de contacto" required/>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email de contacto" required/>
					</div>
					<input type="hidden" name="partnerId" value="<?php echo $partnerId ?>">
					<input type="hidden" name="type" value="<?php echo $type ?>">
					<button type="submit" class="btn btn-sub">Contáctanos</button>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>