<?php include 'GABCA2.0-HEADER.php';?>

<!-- ///////////////////// GABCA2.0 Navigation bar //////////////////////// -->
<nav class="navbar navbar-dark sticky-top navbar-expand-md">
   
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav text-center mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
        
      </ul>
    </div>
  </nav> 



<!-- Email Contact Form -->
<div class="container-fluid formacorreo">
	<div class="row">
		<div class="col-md-6">
			<div class="container-fluid p-sm-3 p-md-5">	
				<h5>Contáctanos</h5>
				  <form action="mail.php" method="post" class="needs-validation" novalidate>
				    <div class="form-group">
				      <label for="nombre">Nombre</label>
				      <input type="text" class="form-control" id="nombre" placeholder="Teclea tu nombre" name="nombre" required>
				      <div class="valid-feedback">Gracias</div>
				      <div class="invalid-feedback">Por favor teclea tu nombre</div>
				    </div>
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Teclea tu eMail" name="email" required>
				      <div class="valid-feedback">Gracias</div>
				      <div class="invalid-feedback">Por favor teclea tu email</div>
				    </div>
				    <div class="form-group">
				      <label for="tel">Tel:</label>
				      <input type="tel" class="form-control" id="phone" placeholder="Teclea tu teléfono" name="phone" required>
				      <div class="valid-feedback">Gracias</div>
				      <div class="invalid-feedback">Por favor teclea tu teléfono</div>
				    </div>
				    <div class="form-group">
				      <label for="mensaje">Mensaje:</label>
				      <textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
				      <div class="valid-feedback">Gracias</div>
				      <div class="invalid-feedback">Por favor teclea tu mensaje</div>
				    </div>
				
				    <button type="submit" class="btn btn-secondary">ENVIAR</button>
				  </form>
			</div>
		</div>

		<div class="col-md-1"></div>

		<div class="col-md-4 my-auto" data-aos="fade-left" data-aos-duration="1500">
			<img src="img/Logo_Gabca.png" class="img-fluid">
			<div class="container-fluid p-sm-1 p-md-4">
				<h5 class="mb-0 pt-4">Teléfono / Whatsapp:</h5>
				<p class="mb-0">55.4928.7981</p>
    			<a href="gabriel@gabca.com.mx" class="pb-4">gabriel@gabca.com.mx</a>
    		</div>
		</div>
		<div class="col-md-1"></div>
	</div>	  
</div>

<?php include 'GABCA2.0-FOOTER.php';?>










