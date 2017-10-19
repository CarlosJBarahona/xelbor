<!DOCTYPE html>
<html ng-app="project" scroll>
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="jJeD-sJ-SVyecf0sAFpNegi4YW6NlNZ3B1V2_V8ZjYA" />

	<meta http-equiv="Expires" content="0">

	<meta http-equiv="Last-Modified" content="0">

	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

	<meta http-equiv="Pragma" content="no-cache">

	<title><?php wp_title("xelbor".' |',true,RIGHT); ?></title>

	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/bower_components/angular-material/angular-material.min.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/style.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/animate.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/owl.theme.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/owl.transitions.css">
	<link rel="stylesheet" href="<?=get_bloginfo('template_directory')?>/css/main.css">
    <script src="<?=get_bloginfo('template_directory')?>/bower_components/jquery/dist/jquery.min.js"></script>
    <!--<link rel="icon" type="image/ico" href="<?=get_bloginfo('template_directory')?>/favicon.ico">-->

</head>

<body class="ng-cloak body">

<div class="header" layout="column">

	<!--
	<div class="cont" layout="row" layout-align="space-between center">
		
		<div class="idioma"></div>

		<div class="text" layout="row" layout-align="center center">
			<p>transportación oficial aeropotuaria</p>
			<i class="icon-plane"></i>
		</div>

		<div class="redes" layout="row" layout-align="center center">
			<a href="">
				<i class="icon-fb"></i>
			</a>
			<a href="">
				<i class="icon-insta"></i>
			</a>
		</div>

	</div>
	-->

	<div class="cont" layout="row" layout-wrap layout-align="space-between stretch">
		
		<div class="menu" layout="row" layout-align="start center" flex="30" ng-controller="scrollCTL">
			
			<i class="icon-menu" ng-click="openMenu()"></i>

			<a href="" class="idioma">
				<span>english</span>
			</a>

		</div>

		<a href="" layout="column" flex>
			<img src="<?=get_bloginfo('template_directory')?>/img/logo.png" alt="">
		</a>

		<div class="contacto" layout="row" layout-align-gt-sm="end center" layout-align="center center"  flex-gt-sm="30" flex="100" ng-controller="scrollCTL">
			<i class="icon-contact"></i>
			<p>Tel. 01 800 <strong>990 12 18</strong></p>
			<div class="redes" layout="row" layout-align="center center">
				<a href="">
					<i class="icon-fb"></i>
				</a>
				<a href="">
					<i class="icon-insta"></i>
				</a>
			</div>
			<?php if ($_SERVER['REQUEST_URI']=="/facturacion/") { ?>
			<a  href="/home#contacto"  class="button" layout="column" layout-align="center center">
				<p>contacto</p>
			</a>
			<?php  }else{ ?>
			<a class="button" layout="column" layout-align="center center" ng-click="scrollTo('contacto',$event)">
				<p>contacto</p>
			</a>
			<?php } ?>
		</div>

	</div>

</div>

<md-sidenav md-component-id="left" class="md-sidenav-left">
<?php 
	
	      						
	if ($_SERVER['REQUEST_URI']=="/facturacion/") { ?>
	<ul class="ul-movil" ng-controller="scrollCTL">
		<li><a href="/home#inicio" class="link"><p>inicio</p></li>
		<li><a href="/home#acerca" class="link"><p>acerca de</p></a></li>
		<li><a href="/home#servicios" class="link"><p>nuestros servicios</p></a></li>
		<li><a href="/home#testimonio" class="link"><p>testimoniales</p></a></li>
		<li><a href="/home#preguntas" class="link"><p>preguntas frecuentes</p></a></li>
		<li><a href="/facturacion" class="link"><p>facturación</p></a></li>
	</ul>
	<?php  }else{ ?>
	<ul class="ul-movil" ng-controller="scrollCTL">
		<li><a ng-click="scrollTo('inicio',$event); openMenu()" class="link"><p>inicio</p></li>
		<li><a ng-click="scrollTo('acerca',$event); openMenu()" class="link"><p>acerca de</p></a></li>
		<li><a ng-click="scrollTo('servicios',$event); openMenu()" class="link"><p>nuestros servicios</p></a></li>
		<li><a ng-click="scrollTo('testimonio',$event); openMenu()" class="link"><p>testimoniales</p></a></li>
		<li><a ng-click="scrollTo('preguntas',$event); openMenu()" class="link"><p>preguntas frecuentes</p></a></li>
		<li><a href="/facturacion" class="link"><p>facturación</p></a></li>
	</ul>
<?php } ?>		
</md-sidenav>

<div class="content">