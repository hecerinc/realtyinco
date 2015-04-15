<?php require "header.php"; ?>
	<!-- begin content -->
	<div class="container">
		<h2>Calculadora Hipotecaria</h2>
		<div class="row">
			<div class="six columns calculator">
				<div class="clear h50px no-mobile-b"></div>
				<!-- <div class="clear h20px mobile-b"></div> -->
				<p class="nota">Nota:</p>
				<p>El c&aacute;lculo es aproximado y no incluye gastos de apertura de cr&eacute;dito u otros que sean requeridos.</p>
				<br>
				<p>Para una decisi&oacute;n final, consulte a su Banco.</p>
			</div>
			<div class="six columns calculator">
				<div class="clear h30px mobile-b"></div>
				<small class="instructions">Modifique la informaci&oacute;n para recalcular el Pago Mensual y/o Pago Inicial</small>
				<div class="calc">
					<div class="u-cf">
						<p class="label">Propiedad ID:</p>
						<input type="text" name="ID" id="ID" value="31-CV-25" disabled>
					</div>
					<div class="u-cf">
						<p class="label">Precio propiedad</p>
						<input type="text" name="price" id="price" class="ico-money">
					</div>
					<div>
						<div class="u-cf">
							<p class="label">Pago inicial</p>
							<input type="text" name="init" id="init" class="ico-money">
						</div>
						<div class="u-cf">
							<input type="text" name="init2" id="init2" class="ico-percent">
						</div>
					</div>
					<div>
						<div class="u-cf">
							<p class="label">Plazo Meses</p>
							<input type="text" name="months" id="months">
						</div>
						<div class="u-cf">
							<p class="label">Años</p>
							<input type="text" name="years" id="yearse">
						</div>
					</div>
					<div class="last">
						<div class="u-cf">
							<p class="label">Inter&eacute;s Anual</p>
							<input type="text" name="tax" id="tax" class="ico-percent">
						</div>
						<div class="u-cf">
							<p class="label"><strong>Pago Mensual</strong></p>
							<input type="text" name="paymonth" id="paymonth" class="ico-money">
						</div>
					</div>
					<input type="submit" value="CALCULAR" class="submit">
				</div>
			</div>
		</div>
	</div>
	<!-- end content -->
	<div class="clear h100px"></div>

<?php require "footer.php"; ?>