<?php require "header.php"; ?>


	<!-- begin content -->
	<div class="container">
		<h2>Recomienda esta propiedad</h2>
		<form class="recommend">
			<div class="property-id u-cf">
				<p class="left u-fl">Propiedad ID</p>
				<p class="right u-fl">31-CV-25</p>
			</div>
			<div class="clear h20px"></div>
			<div class="from">
				<div class="u-fl">
					<label for="remitente" style="margin-right:36px;">De:</label>
					<input class="i-text" type="text" name="remitente" id="remitente">
				</div>
				<div class="u-fr">
					<label for="email">Correo electr&oacute;nico:</label>
					<input class="i-text" type="email" name="email" id="email">
				</div>
			</div>
			<div class="clear"></div>
			<hr>
			<p class="label">Para:</p>
			<div class="friend u-cf">
				<div class="u-fl">
					<label for="friend1">Amigo 1:</label>
					<input class="i-text" type="text" name="friend1" id="friend1">
				</div>
				<div class="u-fr">
					<label for="email1">Correo electr&oacute;nico 1:</label>
					<input class="i-text" type="email" name="email1" id="email1">
				</div>
			</div>
			<div class="friend u-cf">
				<div class="u-fl">
					<label for="friend2">Amigo 2:</label>
					<input class="i-text" type="text" name="friend2" id="friend2">
				</div>
				<div class="u-fr">
					<label for="email2">Correo electr&oacute;nico 2:</label>
					<input class="i-text" type="email" name="email2" id="email2">
				</div>
			</div>
			<div class="friend u-cf">
				<div class="u-fl">
					<label for="friend3">Amigo 3:</label>
					<input class="i-text" type="text" name="friend3" id="friend3">
				</div>
				<div class="u-fr">
					<label for="email3">Correo electr&oacute;nico 3:</label>
					<input class="i-text" type="email" name="email3" id="email3">
				</div>
			</div>
			<div class="clear"></div>
			<hr>
			<label for="message">Mensaje:</label>
			<textarea name="message" id="message"></textarea>
			<input type="submit" value="ENVIAR" class="submit">
		</form>
		<div class="clear h40px"></div>
	</div>
	<!-- end content -->


<?php require "footer.php"; ?>