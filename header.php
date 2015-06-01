<!DOCTYPE html>
<html lang="es">
<head>

	<!-- Basic Page Needs
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="UTF-8">
	<title>Realty World - Home</title>

	<!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FONT
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

	<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/customSelectBox.css">
	<link rel="stylesheet" href="css/jquery.jscrollpane.css">
	<link rel="stylesheet" href="css/responsive-nav.css">
	<link rel="stylesheet" href="style.css">
	
	<!-- JS -->
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/responsive-nav.min.js"></script>

</head>
<body>
	<div class="top-band">
		<div class="clear h20px"></div>
		<div class="container header">
			<div class="row top-header">
				<a href="/realty" class="logo u-fl">Realty World Inco</a>
				<div class="clear h20px specialbreak"></div>
				<div class="property-search u-fr">
					<form action="#">
						<fieldset>
							<legend class="prop-legend u-fl">B&uacute;squeda de Propiedades</legend>
							<div class="clear"></div>
							<div class="selects u-fl">
								<div class="select-left u-fl">
									<select name="tipo" id="tipo" class="left custom" style="display:none;">
										<option value="1">Casas</option>
										<option value="2">Departamentos</option>
									</select>
									<select name="zona" id="zona" class="left custom" style="display:none;">
										<option value="1">Zona Valle</option>
										<option value="2">Zona Contry</option>
									</select>
									<select name="deal" id="deal" class="left custom" style="display:none;">
										<option value="1">Venta</option>
										<option value="2">Renta</option>
									</select>
								</div>
								<div class="select-right u-fr">
									<select name="range" id="range" class="right custom" style="display:none;">
										<option value="">Rango de precios</option>
										<option value="1">$100.00 - $200.00</option>
									</select>
									<div class="vistas">
										<input type="radio" name="vista" value="rapida" id="vrapida">
										<label for="vrapida">Vista r&aacute;pida</label>
										<div class="clear no-mobile-b"></div>
										<input type="radio" name="vista" id="vnormal" value="normal">
										<label for="vnormal">Vista normal</label>								
									</div>
								</div>
							</div>
							<div class="u-fr btn-search">
								<input type="submit" value="BUSCAR" class="submit">
								<div class="clear"></div>
								<a href="bavanzada.php" class="advanced-search">B&uacute;squeda avanzada</a>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-band">
		<div class="container">
			<div class="row">
				<nav class="main-nav">
					<ul>
						<li class="home"><a href="#">Home</a></li>
						<li><a href="aboutus.php">Qui&eacute;nes Somos</a></li>
						<li><a href="#">Propiedades</a></li>
						<li><a href="#">Servicios</a></li>
						<li><a href="asesores.php">Asesores</a></li>
						<li><a href="#">Brokers</a></li>
						<li><a href="#">Red RW</a></li>
						<li class="last"><a href="#">Cont&aacute;ctanos</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="sub-nav-band">
		<div class="container">
			<div class="row">
				<div class="text-info u-cf">
					<p class="realty-world u-fl">Realty World Inco</p>
					<p class="address u-fl"> &nbsp;&nbsp;Tel. 01 (81) 8220 8480 y 84 Ext. 101</p>
				</div>
				<div class="clear h10px"></div>
				<div class="home-btns">
					<a href="#" class="btn-attention">Atenci&oacute;n a clientes</a>
					<a href="#" class="btn-register-property">Registra propiedad</a>
					<a href="#" class="btn-search-property">Busco propiedad</a>
					<a href="#" class="fb no-mobile">Link to Facebook</a>
				</div>
				<div class="clear h10px btn-break"></div>
			</div>
		</div>
	</div>
	<div class="clear h30px"></div>
	<!-- end header -->