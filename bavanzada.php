<?php require "header.php"; ?>
	<div class="container bavanzada">
		<h2>B&uacute;squeda Avanzada</h2>
		<div class="smaller-container">
			<form action="#" class="advanced-search-form" id="asform">
				<fieldset class="first">
					<ul class="u-fl left-side">
						<li>
							<label for="estado">Estado</label>
							<select name="estado" id="estado" class="select-1">
								<option value="1">Default</option>
							</select>
						</li>
						<li>
							<label for="municipio">Municipio</label>
							<select name="municipio" id="municipio" class="select-1">
								<option value="1">Default</option>
							</select>
						</li>
						<li>
							<label for="#">Zona de propiedad</label>
							<select class="select-1" name="zona" id="zona">
								<option value="1">Default</option>
							</select>
						</li>
						<li>
							<label for="colonia">Colonia</label>
							<select name="colonia" id="colonia" class="select-1">
								<option value="1">Default</option>
							</select>
						</li>
					</ul>
					<ul class="u-fr right-side" id="estate">
						<li>
							<label for="#">Renta o Venta</label>
							<select class="select-2" name="tipo" id="tipo">
								<option value="1">Default</option>
							</select>
						</li>
						<li>
							<label for="#">Tipo de propiedad</label>
							<select class="select-2" name="propiedad" id="propiedad">
								<option value="1">Casas</option>
								<option value="2">Departamentos</option>
								<option value="3">Quintas</option>
								<option value="4">Bodegas</option>
								<option value="5">Terrenos</option>
								<option value="6">Oficinas/Locales</option>
								<option value="7">Ranchos</option>
								<option value="8">Hoteles</option>
								<option value="9">Edificios de departamentos</option>
								<option value="10">Fraccionamientos</option>
								<option value="11">Plazas comerciales</option>
							</select>
						</li>
						<li>
							<label for="#">Rango de precios</label>
							<select class="select-2" name="rango" id="rango">
								<option value="1">Default</option>
							</select>
						</li>
						<li>
							<div class="u-fl tipodevistas">
								<input type="radio" name="vista" id="rapida">
								<label for="rapida">Vista r&aacute;pida</label>
								<input type="radio" name="vista" id="normal">
								<label for="normal">Vista normal</label>
							</div>
						</li>
					</ul>
				</fieldset>
				<fieldset class="property">
					<legend>Especificaciones de la propiedad</legend>
					<div class="u-fl no-float-m property-spec">
						<div class="metros1 u-cf">
							<label class="u-fl" style="margin-bottom:20px;">m<sup>2</sup> de terreno</label>
							<div class="u-fr metros10 no-float-m">
								<select name="metrost-lower" id="metrost-lower" class="select-3 lowerm">
									<option value="1">Default</option>
								</select>
								<p style="display:inline;">a</p>
								<select name="metrost-upper" id="metrost-upper" class="select-3 upperm">
									<option value="1">Default</option>
								</select>
							</div>
						</div>
						<div class="metros2 u-cf">
							<label for="" class="u-fl" style="margin-bottom:20px;">m<sup>2</sup> de construcci&oacute;n</label>
							<div class="u-fr metros20 no-float-m">
								<select name="metrosc-lower" id="metrosc-lower" class="select-3 lowerm">
									<option value="1">Default</option>
								</select>
								<p style="display:inline;">a</p>
								<select name="metrosc-upper" id="metrosc-upper" class="select-3 upperm">
									<option value="1">Default</option>
								</select>
							</div>
						</div>
						<div class="u-fr no-float-m fotosyvideos">
							<input type="checkbox" name="fotos" id="fotos">
							<label for="fotos">Fotograf&iacute;as</label>
							<input type="checkbox" name="videos" id="videos">
							<label for="videos">Videos</label>
						</div>
					</div>
					<ul class="u-fr property-right-side no-float-m">
						<li>
							<label for="plantas">plantas</label>
							<select class="select-3" name="plantas" id="plantas">
								<option value="1">Default</option>
							</select>
						</li>
						<li>
							<label for="banos">baños</label>
							<select class="select-3" name="banos" id="banos">
								<option value="1">Default</option>
							</select>
						</li>
						<li>
							<label for="recamaras">rec&aacute;maras</label>
							<select class="select-3" name="recamaras" id="recamaras">
								<option value="1">Default</option>
							</select>
						</li>
					</ul>
				</fieldset>
				<fieldset class="amenities">
					<legend>Elige amenidades</legend>
					<!-- Esta parte scalea con los li's, *NO* agregar mas ul.check-list, sino agrega elementos a cada columna -->
					<ul class="check-list">
						<!-- <li>
							<input type="checkbox" name="alberca" id="alberca">
							<label for="alberca">Alberca</label>
						</li>
						<li>
							<input type="checkbox" name="chimenea" id="chimenea">
							<label for="chimenea">Chimenea</label>
						</li> -->
					</ul>
					<ul class="check-list">
					</ul>
					<ul class="check-list">
					</ul>
					<ul class="check-list">
					</ul>
				</fieldset>
				<input type="submit" value="BUSCAR" class="submit-btn">
			</form>
		</div>
	</div>
	<script>
		document.getElementById('asform').reset();
		checkAmenities();
		$('#propiedad').on('change', checkAmenities);
		function checkAmenities(){
			var amenities;
			switch(parseInt($('#propiedad').val())){
				case 1: //Casa
					amenities = [
						'Amueblada', 
						'Una planta', 
						'Alberca', 
						'Gimnasio', 
						'Chimenea', 
						'Jardín',
						'Cuarto de servicio',
						'Tecnologías inteligentes',
						'Biblioteca',
						'Cochera techada',
						'Cocina integral',
						'Libre de gravamen',
						'Estancia familiar',
						'Aceptan estudiantes'
					];
				break;
				case 2: //Departamento
					amenities = [
						'Tecnologías inteligentes',
						'Tecnologías ecológicas',
						'Cajones de estacionamiento',
						'Alberca',
						'Gimnasio',
						'Accesos especiales',
						'Elevador',
						'Jardines',
						'Salón de eventos',
						'Área de bodega',
						'Lobby',
						'Seguridad',
						'Libre de gravamen',
						'Estancia familiar',
						'Aceptan estudiantes'
					];
				break;
				case 4://Bodegas
					amenities = [
						'Espuela de ferrocarril',
						'Grúa viajera',
						'Comedor',
						'Área de maniobras',
						'Andenes',
						'Cajones de estacionamiento',
						'Libre de gravamen'
					];
				break;
				case 5: //Terrenos
					amenities = [
						'Red eléctrica',
						'Agua potable',
						'Gas natural',
						'Alumbrado público',
						'Drenaje sanitario',
						'Calles pavimentadas',
						'Libre de gravamen'
					];
				break;
				case 6: //Oficinas/Locales
					amenities = [
						'Estacionamiento público',
						'Estacionamiento para empleados',
						'Cocineta',
						'Paleta de publicidad',
						'Área de bodega o almacenaje',
						'Libre de gravamen'
					];
				break;
				default:
					amenities = null;
			}
			if(!amenities)
				return false;
			var html = "";
			var each = Math.floor(amenities.length/4);
			var rem = amenities.length%4;
			var checklists = $('.check-list');
			checklists.empty();
			var k=0;
			for (var i = 0; i < 4; i++) {
				for (var j=0; j < each; j++) {
					html = '<li><label for="asador"><input type="checkbox" name="asador" id="asador">';
					html += amenities[k]+'</label></li>';
					checklists.eq(i).append(html);
					k++;
				}
			}
			for (var i = 0; i < rem; i++) {
				html = '<li><label for="asador"><input type="checkbox" name="asador" id="asador">';
				html += amenities[amenities.length-i-1]+'</label></li>';
				checklists.eq(i).append(html);
			}

		}
	</script>
<?php require "footer.php" ?>