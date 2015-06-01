<?php require "header.php"; ?>
	<div class="container bavanzada">
		<h2>B&uacute;squeda Avanzada</h2>
		<div class="smaller-container">
			<form action="#" class="advanced-search-form">
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
							<label for="#">Tipo de propiedad</label>
							<select class="select-1" name="propiedad" id="propiedad">
								<option value="1">Casas</option>
								<option value="2">Departamentos</option>
								<option value="3">Quintas</option>
								<option value="4">Bodegas</option>
								<option value="5">Terrenos</option>
								<option value="6">Locales</option>
								<option value="7">Oficinas</option>
								<option value="8">Ranchos</option>
								<option value="9">Hoteles</option>
								<option value="10">Edificios de departamentos</option>
								<option value="11">Fraccionamientos</option>
								<option value="12">Plazas comerciales</option>
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
							<label for="#">Zona de propiedad</label>
							<select class="select-2" name="zona" id="zona">
								<option value="1">Default</option>
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
						<li>
							<input type="checkbox" name="alberca" id="alberca">
							<label for="alberca">Alberca</label>
						</li>
						<li>
							<input type="checkbox" name="chimenea" id="chimenea">
							<label for="chimenea">Chimenea</label>
						</li>
					</ul>
					<ul class="check-list">
						<li>
							<input type="checkbox" name="amueblado" id="amueblado">
							<label for="amueblado">Amueblado</label>
						</li>
						<li>
							<input type="checkbox" name="private" id="private">
							<label for="private">Fracc. privado</label>
						</li>
					</ul>
					<ul class="check-list">
						<li>
							<input type="checkbox" name="asadaor" id="asador">
							<label for="asador">Asador</label>
						</li>
						<li>
							<input type="checkbox" name="gym" id="gym">
							<label for="gym">Gimnasio</label>
						</li>
					</ul>
					<ul class="check-list">
						<li>
							<input type="checkbox" name="biblio" id="biblio">
							<label for="biblio">Biblioteca</label>
						</li>
						<li>
							<input type="checkbox" name="juegos" id="juegos">
							<label for="juegos">Juegos</label>
						</li>
					</ul>
				</fieldset>
				<input type="submit" value="BUSCAR" class="submit-btn">
			</form>
		</div>
	</div>
	<script>
		$(function(){
			/*$("select.select-1").each(function() {					
				var sb = new SelectBox({
					selectbox: $(this),
					width: 140,
					changeCallback: detectProperty
					// height: 25
				});
			});
			$("select.select-2").each(function() {					
				var sb = new SelectBox({
					selectbox: $(this),
					width: 220
					// height: 25
				});
			});
			$("select.select-3").each(function() {					
				var sb = new SelectBox({
					selectbox: $(this),
					width: 100
					// height: 25
				});
			});*/
		});
	</script>
<?php require "footer.php" ?>