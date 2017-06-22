<?php require_once('blocks/get_data.php'); ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once('blocks/head.php'); ?>
<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5547FB7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="loader">
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
          <span class="sr-only">45% Complete</span>
        </div>
      </div>
    </div>

    <section class="main">
      <?php require_once('blocks/header.php'); ?>
      <?php if(!isset($_REQUEST['content'])){
        require_once('blocks/home.php');
      }elseif($_REQUEST['content']=='gracias'){
        require_once('blocks/gracias.php');
      }else{
        require_once('blocks/home.php');
      } 
      ?>
      <?php require_once('blocks/footer.php'); ?>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="formCont">
             <div class="formHeader">
              <p class="text-center">¡Recibe asesoría personalizada!</p>
            </div>
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
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/bootbox.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
