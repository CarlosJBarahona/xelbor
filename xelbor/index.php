<?php
/* 
Template Name: Home
*/ 
?>
<?php get_header();?>

<div id="home" class="ng-cloak" layout="column">

	<div id="inicio" class="slider" layout="column">
		<div class="arrow left prev" layout="row" layout-align="center center">
			<i class="icon-arrow-left"></i>
		</div>
		<div class="slide-home">
			<div class="item item-home" layout="row" layout-align="center center" style="background: url('<?=get_bloginfo('template_directory')?>/img/shut.jpg');">
				<div class="max-widht3" layout="row" layout-align="center center">
					<div class="cont" layout="column"  layout-align="center center">
						<p>
							transportación oficial <br> 
							<strong>aeroportuaria</strong>
						</p>
						<i class="icon-plane"></i>
						<a href="" class="contacts">
							<span>contacto</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="arrow rigth next" layout="row" layout-align="center center">
			<i class="icon-arrow-right"></i>
		</div>
	</div>

	<div class="imagenes" layout="row" layout-wrap>
		<div class="img item" layout="row" layout-align="center center" style="background: url('<?=get_bloginfo('template_directory')?>/img/car/1.jpg');">
			<div class="absolute-div" layout="row" layout-align="center center">
				<i class="icon-star"></i>
			</div>
		</div>
		<div class="img item" layout="row" layout-align="center center"  style="background: url('<?=get_bloginfo('template_directory')?>/img/car/2.jpg');">
			<div class="absolute-div" layout="row" layout-align="center center">
				<i class="icon-star"></i>
			</div>
		</div>
		<div class="img item" layout="row" layout-align="center center" style="background: url('<?=get_bloginfo('template_directory')?>/img/car/3.jpg');">
			<div class="absolute-div" layout="row" layout-align="center center">
				<i class="icon-star"></i>
			</div>
		</div>
		<div class="img item" layout="row" layout-align="center center" style="background: url('<?=get_bloginfo('template_directory')?>/img/car/4.jpg');">
			<div class="absolute-div" layout="row" layout-align="center center">
				<i class="icon-star"></i>
			</div>
		</div>
		<div class="img item" layout="row" layout-align="center center" style="background: url('<?=get_bloginfo('template_directory')?>/img/car/5.jpg');">
			<div class="absolute-div" layout="row" layout-align="center center">
				<i class="icon-star"></i>
			</div>
		</div>
		<div class="img item" layout="row" layout-align="center center" style="background: url('<?=get_bloginfo('template_directory')?>/img/car/6.jpg');">
			<div class="absolute-div" layout="row" layout-align="center center">
				<i class="icon-star"></i>
			</div>
		</div>
	</div>

	<div id="acerca" class="acerca" layout="row" layout-align="center center">
		
		<div class="max-widht1" layout="column">
			<h1 class="title">
				Acerca de <br><br>
				<strong>xelbor</strong>
			</h1>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
			</p>

			<div class="cont" layout="row" layout-wrap layout-align="space-between center">
				<div class="box wow fadeInUp" layout="column" layout-align="center center" flex-gt-xs="33" flex="100" data-wow-delay=".4s" data-wow-duration="2s">
					<div class="icon" layout="row" layout-align="center center">
						<i class="icon-van"></i>
					</div>
					<p>siempre <strong>a tiempo</strong></p>
				</div>
				<div class="box wow fadeInUp" layout="column" layout-align="center center" flex-gt-xs="33" flex="100" data-wow-delay=".5s" data-wow-duration="2s">
					<div class="icon" layout="row" layout-align="center center">
						<i class="icon-calendar"></i>
					</div>
					<p>reserva <strong>anticipada</strong></p>
				</div>
				<div class="box wow fadeInUp" layout="column" layout-align="center center" flex-gt-xs="33" flex="100" data-wow-delay=".6s" data-wow-duration="2s">
					<div class="icon" layout="row" layout-align="center center">
						<i class="icon-safe"></i>
					</div>
					<p>siempre <strong>seguro</strong></p>
				</div>
			</div>

		</div>

	</div>

	<div id="servicios" class="servicios" layout="column">
		<h1 class="title">
			Nuestros <br><br>
			<strong>Servicios</strong>
		</h1>
		<div layout="row" layout-wrap layout-align="center center">

			<div class="max-widht1" layout="row" layout-wrap layout-align="space-between start">

				<div class="cont wow fadeInUp" layout="column" flex-gt-xs="30" data-wow-delay=".3s"  data-wow-duration="4s">
					<div class="imagen">
						<img src="<?=get_bloginfo('template_directory')?>/img/1.jpg" alt="">
						<a href="" class="button" layout="column">
							<span>elegir</span>
						</a>
					</div>
					<div class="box" layout="column">
						<h1>
							Lorem Ipsum
						</h1>
						<ul>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
						</ul>
						<i class="icon-arrow"></i>
					</div>
				</div>

				<div class="cont wow fadeInUp" layout="column" flex-gt-xs="30" data-wow-delay=".4s"  data-wow-duration="4s">
					<div class="imagen">
						<img src="<?=get_bloginfo('template_directory')?>/img/2.jpg" alt="">
						<a href="" class="button" layout="column">
							<span>elegir</span>
						</a>
					</div>
					<div class="box" layout="column">
						<h1>
							Lorem Ipsum
						</h1>
						<ul>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
						</ul>
						<i class="icon-arrow"></i>
					</div>
				</div>

				<div class="cont wow fadeInUp" layout="column" flex-gt-xs="30" data-wow-delay=".5s"  data-wow-duration="4s">
					<div class="imagen">
						<img src="<?=get_bloginfo('template_directory')?>/img/3.jpg" alt="">
						<a href="" class="button" layout="column">
							<span>elegir</span>
						</a>
					</div>
					<div class="box" layout="column">
						<h1>
							Lorem Ipsum
						</h1>
						<ul>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
							<li layout="row" layout-align="center center">
								<i class="icon-check"></i>
								<p>Lorem ipsum dolor</p>
							</li>
						</ul>
						<i class="icon-arrow"></i>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="pasajeros" layout="row" layout-align="center center">
		<div class="max-widht1" layout="row" layout-wrap layout-align="center center">
			<div class="cont" layout="column" layout-align="center center" flex-gt-sm="45" flex="100">
				<i class="icon-pax"></i>
			</div>
			<div class="cont wow fadeInRight" layout="column" layout-align="center center" flex-gt-sm="45" flex="100">
				<div class="box" layout="column" layout-align="start start">
					<p>total de <strong>pasajeros satisfechos</strong></p>
					<h2 id="el" count-to="123538"  duration="1" value="0" type="int"></h2>
				</div>
			</div> 
		</div>
	</div>

	<div id="testimonio" class="reservar" layout="row" layout-align="center center">
		<div class="max-widht1" layout="row" layout-wrap layout layout-align="space-between center">
			<div class="cont" layout="row" layout-align="center start" flex-gt-sm="55" flex="100">
				<div hide-xs class="arrow left prev"><i class="icon-arrow-left "></i></div>
				<div class="testimonio" flex>
					<div class="item">
						<p>
							"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae."
						</p>
						<h2>lorem ipsum dolor</h2>
						<i><strong>Cliente Xelbor</strong></i>
					</div>
				</div> 
				<div hide-xs class="arrow rigth next"><i class="icon-arrow-right"></i></div>
			</div>
			<div class="cont" layout="column" layout-align="center center" flex-gt-sm="35" flex="100" ng-controller="scrollCTL">
				<i class="icon-rate"></i>
				<a href="" class="button" ng-click="scrollTo('contacto',$event)">
					<span>contacto</span>
				</a>
			</div>
		</div>
	</div>

	<div id="preguntas" class="preguntas" layout="row" layout-wrap layout-align="center center">
		<h1 class="title" flex="100">
			Preguntas <br><br>
			<strong>Frecuentes</strong>
		</h1>
		<div class="max-widht1" layout="row" layout-wrap layout-align="space-between start">
			<div class="box" layout="column" flex-gt-xs="45" flex="100">
				<h2>1. Lorem ipsum dolor</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
				</p>
			</div>
			<div class="box" layout="column" flex-gt-xs="45" flex="100">
				<h2>2. Lorem ipsum dolor</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
				</p>
			</div>
			<div class="box" layout="column" flex-gt-xs="45" flex="100">
				<h2>3. Lorem ipsum dolor</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
				</p>
			</div>
			<div class="box" layout="column" flex-gt-xs="45" flex="100">
				<h2>4. Lorem ipsum dolor</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
				</p>
			</div>
			<div class="box" layout="column" flex-gt-xs="45" flex="100">
				<h2>5. Lorem ipsum dolor</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
				</p>
			</div>
			<div class="box" layout="column" flex-gt-xs="45" flex="100">
				<h2>6. Lorem ipsum dolor</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
				</p>
			</div>
		</div>
	</div>

	<div id="contacto" class="contactanos" layout="row" layout-wrap layout-align="center center">
		<div class="max-widht1" layout="row" layout-wrap layout-align="space-between start">
			<div class="cont" flex-gt-xs="40" flex="100">
				<p class="ayudarte">
					¿cómo podemos <strong>ayudarte ?</strong>
				</p>
				<i class="icon-phone"></i>
				<p class="info">
					<strong>cancun:</strong><br><br>
					Tel. (998) 123-45-67
				</p>
				<p class="info">
					<strong>toll free</strong><br><br>
					01-800-00-1234
				</p>
				<p class="info">
					<strong>correo</strong><br><br>
					info<span>@xelbor.com</span>
				</p>
			</div>
			<div class="cont" layout="column" flex-gt-xs="50" flex="100">
				<div class="box" layout="column">
					<p>nombre*</p>
					<input type="text" class="input">
				</div>
				<div class="box" layout="column">
					<p>correo*</p>
					<input type="email" class="input">
				</div>
				<div class="box" layout="column">
					<p>asunto*</p>
					<textarea name="" id="" cols="30" rows="10" class="input"></textarea>
				</div>
				<div layout="row" layout-align="center center">
					<button class="button">
						<span>enviar</span>
					</button>
				</div>
			</div>
		</div>
	</div>

</div>
<?php get_footer(); ?>