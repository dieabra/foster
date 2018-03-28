<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
      	<img src="img/FosterNutritionID_04.png" class="img-logo-footer" alt="">
        <div class="univia300">
        	<p class="info-footer margintop10">Tucumán 422 / CPA C1049AAJ. Ciudad Autónoma de Buenos Aires.</p>
        	<p class="info-footer">Copyright <i class="fa fa-copyright"></i> Foster Nutrition. Todos los derechos reservados.</p>
        </div>
      </div>
      <div class="col-md-7">
      	<div class="links-footer">
      		<div class="links-column">
      			<a href="#" class="title">Productos y servicios</a>
      			<a href="montacargas.php" class="univia300">Montacargas</a>
            <a href="montapersonas.php" class="univia300">Montapersonas</a>
      			<a href="andamios.php" class="univia300">Andamios</a>
      			<a href="eleseg360.php" class="univia300">Eleseg 360</a>
      		</div>
      		<div class="links-column">
      			<a href="#" class="title">Sobre Eleseg</a>
      			<a href="trayectoria.php" class="univia300">Trayectoria</a>
      			<!-- <a href="clientes.php" class="univia300">Clientes</a> -->
      			<a href="contactenos.php" class="univia300">Contáctenos</a>
            <a href="alquileres.php" class="univia300">Alquiler</a>
      		</div>
      		<div class="links-column">
      			<a href="#" data-toggle="modal" data-target="#modal-contacto" class="btn btn-primary btn-sm btn-footer">Contáctenos</a>
      			<!-- <p class="clearmargin margintop15 font19">(+5411) 4782-1537</p> -->
      			<p class="clearmargin font19 univia300 margintop15">info@smartfoster.com</p>
      		</div>
      	</div>
      </div>
    </div>
  </div>
</footer>

<div class="modal fade modal-flip-h" id="modal-contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form class="form-material" method="POST" name="sentMessage" id="contactForm" novalidate>
      <div class="modal-content modal-material">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="myModalLabel">Contáctenos</h4>
        </div>
        <div class="modal-body">
          <div class="form-group control-group label-static is-empty">
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id="empresa" required="" placeholder="Ingrese el nombre de la empresa" data-validation-required-message="Por favor ingrese el nombre de la empresa" aria-invalid="false"/>
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group control-group label-static is-empty">
            <label for="nombreDeContacto">Persona de contacto</label>
            <input type="text" class="form-control" id="nombreDeContacto" required="" placeholder="Ingrese su nombre" data-validation-required-message="Por favor ingrese la persona de contacto" />
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group control-group label-static is-empty">
            <label for="telephone">Teléfono</label>
            <input type="text" class="form-control" id="telephone" required="" placeholder="Ingrese su teléfono" data-validation-required-message="Por favor ingrese su teléfono" />
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group control-group label-static is-empty">
            <label for="mail">Email</label>
            <input type="mail" class="form-control" id="email" required="" placeholder="Ingrese su e-mail" data-validation-required-message="Por favor ingrese su email" />
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group control-group label-static is-empty no-margin">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" name="message" id="message" required="" cols="1" placeholder="Ingrese sus comentarios" data-validation-required-message="Por favor ingrese su mensaje" /></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div>
            <div id="success"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-lg">Envíar</button>
        </div>
      </div>
    </form>
  </div>
</div>