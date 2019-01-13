<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body id="page-top">
  <?php
  	$custom_logo_id = get_theme_mod( 'custom_logo' );
  	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
  <!-- Navigation -->
  <div class="gtco-loader"></div>
  <div id="page">
  <nav class="gtco-nav" role="navigation">
      <div class="gtco-container">

          <div class="row">
              <div class="col-sm-2 col-xs-12">
                  <div id="gtco-logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vidrotemp-logo.png" alt="Vidrotemp" class="img-responsive"></div>
              </div>
              <div class="col-xs-10 text-right menu-1">
                  <ul>
                      <li class="active"><a href="index.html">Inicio</a></li>
                      <li><a href="services.html">Servicios</a></li>
                      <li><a href="contact.html">Contacto</a></li>
                  </ul>
              </div>
          </div>

      </div>
  </nav>
