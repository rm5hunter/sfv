<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">

    <?php wp_head(); ?>

  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="fastfood">
          </div>
          
          <div class="col-md-6">

            <ul class="social-header list-inline text-xs-right">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/groups/206677269363589">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
            </ul>

          </div>
        </div>
      </div>

      <div class="menu-bar text-xs-right">
      
    

        <nav class="container" role="menu">
  
           
         
       
          
            
  <?php
		
		 
          wp_nav_menu( array( 
            'theme_location' => 'top',
            'container' => 'nav',
            'container_class' => 'container',
            'menu_class' => 'menu-list list-inline'
          ) );
		  
		 
  ?>
          
          
        </nav>
      </div>

    </header>

   