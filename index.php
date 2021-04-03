<?php
//ejemplo con git



//este get_header contiene todo el codigo header y se encuentra en un archivo header

get_header();



?>


    <div id="main">
      <div class="container">
        <div id="slider-home" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
            <li data-target="#slider-home" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/street2.gif" alt="First slide">
              <div class="carousel-caption">

                <h2>menú fin de semana</h2>
                <img alt="menú 2x1" src="<?php bloginfo( 'template_url' ); ?>/img/2x1.png">
                <p class="h4">en todas las hamburguesas</p>
                <p>Consulta esta y todas nuestras otras promociones en nuestro apartado de carta.</p>
                <a href="#" class="btn btn-secondary">Ver carta</a>

              </div>

            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/slider2.jpg" alt="First slide">

              <div class="carousel-caption">

                <h2>martes locos</h2>
                <img alt="menú 2x1" src="<?php bloginfo( 'template_url' ); ?>/img/2x1.png">
                <p class="h4">pizzas medianas</p>
                <p>Consulta esta y todas nuestras otras promociones en nuestro apartado de carta.</p>
                <a href="#" class="btn btn-secondary">Ver carta</a>

              </div>

            </div>

            <div class="carousel-item">
              <img src="<?php bloginfo( 'template_url' ); ?>/img/slider3.jpg" alt="First slide">

              <div class="carousel-caption">

                <h2>jueves en pareja</h2>
                <img alt="menú 2x1" src="<?php bloginfo( 'template_url' ); ?>/img/2x1.png">
                <p class="h4">especial perritos</p>
                <p>Consulta esta y todas nuestras otras promociones en nuestro apartado de carta.</p>
                <a href="#" class="btn btn-secondary">Ver carta</a>

              </div>

            </div>
          </div>

        </div>
<?php
dynamic_sidebar( 'id-nueva-zona' );
?>


        <div class="row mar-top-80">
          <div class="col-md-6">
            <h3>El restaurante <strong>fastfood</strong> <i class="fa fa-spoon pull-right hidden-xs-down" aria-hidden="true"></i></h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend in mauris in suscipit. Aliquam mollis dolor vel nisl posuere, in venenatis nibh ultricies. Etiam condimentum vel nulla id volutpat. Etiam et egestas purus. Maecenas porttitor, erat quis lobortis feugiat, elit sapien tempus ante, nec egestas nisl tortor sit amet nunc.</p>

            <p>Vestibulum leo ligula, malesuada et risus at, euismod iaculis quam. Cras ac velit fringilla, vestibulum dolor in, tempus massa. Sed sed euismod libero. Ut vitae suscipit tortor. Mauris augue est, convallis sed felis ac, auctor rhoncus lorem. Proin tincidunt justo ac vestibulum tincidunt.</p>

          </div>
          <div class="col-md-6">
            <h3>Dónde encontrar <strong>fastfood</strong> <i class="fa fa-map-marker pull-right hidden-xs-down" aria-hidden="true"></i></h3>

            <p>Estamos en la Calle de las lechugas, nº 24. Mallorca, España.</p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49208.66213840587!2d2.6457357819800222!3d39.56994739486192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12979259c61ac757%3A0xc40d5406c3d058c6!2sPalma+de+Mallorca%2C+Islas+Baleares!5e0!3m2!1ses!2ses!4v1480101923451" width="100%" height="205" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

        </div>

        <div class="row mar-top-80">

          <div class="col-md-12">

            <h3>El restaurante <strong>fastfood</strong> por dentro <i class="fa fa-camera pull-right hidden-xs-down" aria-hidden="true"></i></h3>

            <div class="row">
              <div class="col-sm-4">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/gallery01.jpg" alt="Imagen 1" class="img-fluid">
              </div>
              <div class="col-sm-4">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/gallery02.jpg" alt="Imagen 2" class="img-fluid">
              </div>
              <div class="col-sm-4">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/gallery03.jpg" alt="Imagen 3" class="img-fluid">
              </div>
            </div>

          </div>

        </div>

        <div class="row mar-top-80 sidebars-zone">
          <div class="col-sm-4">
            <h4>Visita <strong>fastfood</strong></h4>

            <p>Estamos abiertos de martes a domingo de las 12h del mediodía hasta las 24h de la noche.</p>

            <p>Podrás encontrarnos en la calle de las lechugas número 24, Mallorca, España.</p>

            <p>Para reservas puedes consultar nuestro <strong>apartado de contacto</strong> o llamarnos al 612 345 678.</p>
          </div>
          <div class="col-sm-4">
            <h4>Ofertas recomendadas</h4>

            <ul class="list-unstyled">
              <li>
                <a href="#">Menú de fin de semana 2x1 en hamburguesas</a>
              </li>
              <li>
                <a href="#">Cena para parejas los martes</a>
              </li>
              <li>
                <a href="#">Menú "come hasta explotar"</a>
              </li>
              <li>
                <a href="#">La mega hamburguesa</a>
              </li>
            </ul>

          </div>
          <div class="col-sm-4">
            <h4>Síguenos en las redes sociales</h4>

            <ul class="list-unstyled">
              <li>
                <a href="#">Facebook</a>
              </li>
              <li>
                <a href="#">Twitter</a>
              </li>
              <li>
                <a href="#">Youtube</a>
              </li>
              <li>
                <a href="#">Instagram</a>
              </li>
            </ul>

          </div>
        </div>

      </div>

    </div>


   <?php get_footer(); ?>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="<?php bloginfo( 'template_url' ); ?>/js/general.js" type="text/javascript"></script>
    <?php wp_footer(); ?>
  </body>
</html>
