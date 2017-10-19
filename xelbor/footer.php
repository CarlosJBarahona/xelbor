</div> <!--content-->
<div class="footer" layout="column" ng-controller="scrollCTL">

	<div class="footer-gray" layout="row" layout-align="center center">

		<div class="max-widht" layout="row" layout-wrap layout-align="space-between start">
		
			<div class="box" layout="column" layout-align="center start" layout-align-xs="center center" flex-gt-xs="25" flex="100" >
				<h2>menú</h2>
				<a ng-click="scrollTo('inicio',$event)" href="">inicio</a>
				<a ng-click="scrollTo('acerca',$event)" href="">acerca de</a>
				<a ng-click="scrollTo('servicios',$event)" href="">nuestros servicios</a>
				<a ng-click="scrollTo('testimonio',$event)" href="">testimoniales</a>
				<a ng-click="scrollTo('preguntas',$event)" href="">preguntas frecuentes</a>
				<a href="/facturacion">facturación</a>
			</div>
			<div class="box " layout="column" layout-align="center center" flex-gt-xs="25" flex="100" >
				<h2>contacto</h2>
				<div class="" layout="column">
					<p class="info">
						<strong>toll free</strong><br><br>
						01 800 990 12 18
					</p>
					<p class="info">
						<strong>toll free</strong><br><br>
						1-8552404832
					</p>
					<br>
					<br>
					<br>
					<br>
					<p class="info">
						info<span>@xelbor.com</span>
					</p>
				</div>
			</div>
			<div class="box" layout="column" layout-align="center center" flex-gt-xs="25" flex="100" >
				<h2>conéctate</h2>

				<div class="icons" layout="row" layout-wrap layout-align="center center">
					<div class="icon wow fadeInUp" layout="row" layout-align="center center" data-wow-delay=".3s">
						<i class="icon-fb"></i>
					</div>
					<div class="icon wow fadeInUp" layout="row" layout-align="center center" data-wow-delay=".4s">
						<i class="icon-insta"></i>
					</div>
					<div class="icon wow fadeInUp" layout="row" layout-align="center center" data-wow-delay=".5s">
						<i class="icon-fb"></i>
					</div>
					<div class="icon wow fadeInUp" layout="row" layout-align="center center" data-wow-delay=".6s">
						<i class="icon-fb"></i>
					</div>
				</div>
			</div>

			<div class="logo-f" layout="row" layout-align="center center" flex="100">
				<a href="" layout="column">
					<img src="<?=get_bloginfo('template_directory')?>/img/logo.png" alt="">
				</a>
				<div class="line" flex></div>
			</div>

		</div>

	</div>

	<div class="footer-white" layout="row" layout-align="center center">
		
		<p><strong>© 2017 XELBOR </strong> All rigths reserved</p>

	</div>

</div>
</body>
<?php include("scripts.php") ?>
</html>