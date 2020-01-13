<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name');
			echo " | ";
			bloginfo('description') ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php get_stylesheet_uri() ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/geral.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/a25b196c07.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<nav id="topnavrow" class="navbar navbar-expand-lg navbar-light bg-color-preto sticky-top">
    <!-- Use container here -->
    <div class="container ">
        <a class="navbar-brand mr-auto" href="#">
            <img src="<?php bloginfo('template_url')?>/imgs/logo.png" class="img-fluid"  alt="logo radams consultoria imobiliaria">
        </a>
		<div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i>(71) </a>
                <a class="nav-item nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i>(71)</a>
                <a class="nav-item nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i> @radamsaraujo</a>
            </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-color-azul py-0 sticky-top">
    ->and use container here as well
    <div class="container">
        <div id="navcollapse" class="collapse navbar-collapse my-2">
            <div class="mx-auto navbar-nav">
                <a class="nav-item nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home </a>
                <a class="nav-item nav-link" href="#"><i class="fa fa-info" aria-hidden="true"> Sobre</i></a>
                <a class="nav-item nav-link" href="#"><i class="fa fa-building" aria-hidden="true">Imóveis</i></a>
                <a class="nav-item nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"> Entre em contato</i></a>
            </div>
        </div>
    </div>
</nav> -->
<?php 

include('auxiliar/menu.php');