<?php require "header.php"; ?>
	<!-- begin content -->
	<div class="container" id="contacto">
		<h2>Cont&aacute;ctanos</h2>
		<div class="clear h20px"></div>
		<div class="row">
			<div class="seven columns">
				<div class="calculator-form left-side">
					<form action="#">
						<legend>Cont&aacute;ctanos</legend>
						<label for="name">Nombre</label>
						<input type="text" name="name" id="name">
						<label for="empresa">Empresa</label>
						<input type="text" name="empresa" id="empresa">
						<div class="u-fl email">
							<label for="ciudad">Ciudad</label>
							<select name="ciudad" id="ciudad">
								<option selected></option>
								<option value="Chilpancingo">Chilpancingo</option>
								<option value="Córdoba">C&oacute;rdoba</option>
								<option value="Ciudad de México">Ciudad de M&eacute;xico</option>
								<option value="Guadalajara">Guadalajara</option>
								<option value="Mérida">M&eacute;rida</option>
								<option value="Mexicali">Mexicali</option>
								<option value="Monterrey">Monterrey</option>
								<option value="Puebla">Puebla</option>
								<option value="Querétaro">Quer&eacute;taro</option>
								<option value="Reynosa">Reynosa</option>
								<option value="Saltillo">Saltillo</option>
								<option value="San Luis Potosí">San Luis Potos&iacute;</option>
							</select>
						</div>
						<div class="u-fr phone">
							<label for="state">Estado</label>
							<select name="state" id="state">
								<option selected></option>
								<option value="Baja California">Baja California</option>
								<option value="Chiapas">Chiapas</option>
								<option value="Coahuila">Coahuila</option>
								<option value="Distrito Federal">Distrito Federal</option>
								<option value="Guerrero">Guerrero</option>
								<option value="Jalisco">Jalisco</option>
								<option value="Nuevo Leon">Nuevo Le&oacute;n</option>
								<option value="Puebla">Puebla</option>
								<option value="Querétaro">Quer&eacute;taro</option>
								<option value="Quintana Roo">Quintana Roo</option>
								<option value="San Luis Potosí">San Luis Potos&iacute;</option>
								<option value="Sonora">Sonora</option>
								<option value="Tamaulipas">Tamaulipas</option>
								<option value="Veracruz">Veracruz</option>
								<option value="Yucatán">Yucat&aacute;n</option>
							</select>
						</div>
						<div class="clear"></div>
						<div class="u-fl email">
							<label for="edad">Edad</label>
							<input type="text" name="edad" id="edad">
						</div>
						<div class="u-fr phone">
							<label for="phone">Tel&eacute;fono</label>
							<input type="text" name="phone" id="phone">
						</div>
						<div class="clear"></div>
						<label for="email">Correo electr&oacute;nico</label>
						<input type="email" name="email" id="email">
						<label for="ocupacion">Ocupaci&oacute;n</label>
						<input type="text" name="ocupacion" id="ocupacion">
						<select name="interes" id="interes">
							<option value="0">Estoy interesadx en...</option>
							<option value="1">Adquirir una franquicia</option>
							<option value="2">Trabajar en una oficina</option>
							<option value="3">Vender una propiedad</option>
							<option value="4">Comprar una propiedad</option>
						</select>
						<label for="msg">Comentarios</label>
						<textarea name="msg" id="msg"></textarea>
						<div class="clear"></div>
						<input type="checkbox" name="terms" id="terms">
						<label for="terms"><a href="#">Acepto los t&eacute;rminos y condiciones</a></label>
						<div class="clear"></div>
						<input type="submit" value="ENVIAR" class="submit">
					</form>
				</div>
			</div>
			<div class="five columns">
				<div class="gMap-contact">
					<iframe width="100%" height="100%" frameborder="0" src="https://maps.google.com.mx/maps?f=d&amp;source=s_d&amp;saddr=25.658751,-100.383786&amp;daddr=&amp;hl=es&amp;geocode=&amp;sll=25.65878,-100.383797&amp;sspn=0.005348,0.010568&amp;mra=mift&amp;mrsp=0&amp;sz=17&amp;ie=UTF8&amp;t=m&amp;ll=25.65878,-100.383797&amp;spn=0.005348,0.010568&amp;output=embed" marginwidth="0" marginheight="0" scrolling="no"></iframe>
				</div>
				<div class="clear"></div>
				<div class="address">
					<strong>Oficinas corporativas</strong>
					<p>
						Ave. Humberto Lobo No. 613-K<br>
						Col. Del Valle<br>
						66220 Garza García, N.L.<br>
						Tel. 01-81-8220-8492<br>
						Fax. 01-81-8220-8491<br>
						E-mail : <a href="mailto:franquicias@realtyworld.com.mx">franquicias@realtyworld.com.mx</a>
					</p>
				</div>
			</div>
		</div>
		<div class="clear h80px"></div>
	</div>
<?php require "footer.php" ?>