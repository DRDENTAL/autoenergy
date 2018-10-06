<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>AUTOENERGY</title>

  <!-- CSS  -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialicon.css" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  
  
  
  
</head>
<body>

 <nav class="navigation" style="background-color: #2DDB2D;" role="navigation">
    <div class="nav-wrapper container">
      
         <img src="img/icologo.png" alt="" class="responsive-img" style="width: 120px; height: 70px;">
     


  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content' style="background-color: #2DDB2D;">
    
    <li><a href="servicios.php" style="color: #ffffff">ERNC</a></li>
    <li><a href="servicios.php" style="color: #ffffff">INDUSTRIAL</a></li>
    <li><a href="servicios.php" style="color: #ffffff">AGRÍCOLA</a></li>
    <!--
    <li class="divider"></li>
    <li><a href="servicios.php" style="color: #ffffff">OTROS</a></li>-->
  </ul>


      <ul class="dropdown-content" id="comp-menu3">
        
        <li><a href="servicios.php">ERNC</a></li>
          <li><a href="servicios.php">INDUSTRIAL</a></li>
          <li><a href="servicios.php">AGRÍCOLA</a></li>
      </ul>
     
      <!--<a id="logo-container" href="#" class="brand-logo">Logo</a>-->
      
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Inicio</a></li>
        <!--<li><a href="#" data-activates="comp-menu3" class="dropdown-button btn">Servicios</a></li>-->
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="ingenieria.php">Ingeniería</a></li>
        <li><a class='dropdown-button' href='#' data-activates='dropdown1'>Nuestros Servicios</a></li>
        <li><a href="ofertas.php">Nuevas Ofertas</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav" style="background-color: #2DDB2D;">
        <li><a href="index.html">Inicio</a></li>
        
        
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="#" data-activates="comp-menu3" class="dropdown-button">Servicios</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  




<!--
  <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item green white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>



      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
        
-->





  <div class="container">
    <div class="section">

      <div class="row center">
         
         <div class="row">
    <form class="col s12">
      <section class="container">
    <div class="row">
    <h3 class="center-align" style="color: #25D366;">CONTACTO</h3>
      <article class="offset-s3">
        <form method="POST" action="formulario-contacto.php">

          <div class="col s6 m6">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">perm_identity</i>
            <label for="nombre" style="color: #25D366;">Nombre</label>
            <input type="text" name="nombre" required>
          </div>
          </div>

          <div class="col s6 m6">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">person_pin</i>
            <label for="apellido" style="color: #25D366;">Apellido</label>
            <input type="text" name="apellido" required>
          </div>
          </div>

          <div class="col s6 m6">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">email</i>
            <label for="email" style="color: #25D366;">Email</label>
            <input type="email" name="email" required>
          </div>
          </div>


          <div class="col s6 m6">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">phone</i>
            <label for="number" style="color: #25D366;">Teléfono</label>
            <input type="number" name="telefono" required>
          </div>
          </div>

          <div class="col s12 m12">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">mode_edit</i>
            <label for="mensaje" style="color: #25D366;">Mensaje</label>
            <textarea name="mensaje" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
          </div>
          </div>

          <p class="center-align">
            <button class="waves-effect waves-light btn" type="submit" style="background-color: #2DDB2D;"><i class="material-icons right" >send</i>enviar</button>
          </p>

        </form>

      </article>
    </div>
  </section>
      
    </form>
  </div>

        
      </div>

    </div>
  </div>






<!--

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>




-->
<footer class="page-footer" style="background-color: #2DDB2D;">
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
            
 <div class="col s5 m5 left-align">
      <b>Todos los derechos reservados a </b><a class="grey-text text-darken-4" href="index.html"><br><b>AutoEnergy Ingeniería y Servicios SPA</b></a> </div>
            <div class="col s7 m7 right-align"><b>Fono Contacto +569 - 48740003</b>

      
      </div>
      
      </div>
    </div>
  </footer>


  <!--  Scripts-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/materialize.min.js"></script>
  
 
 
  
  <script type="text/javascript">
     $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
      $(document).ready(function(){
      $('.carousel').carousel();
      $('.slider').slider();
  });
      
  </script>

  </body>
</html>
