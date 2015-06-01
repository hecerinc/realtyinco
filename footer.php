	<!-- begin footer -->
	<footer class="foot">
		<div class="container">
			<div class="row">
				<p class="rights u-fl">Derechos Reservados &reg; Realty World M&eacute;xico 2015</p>
				<div class="links u-fr">
					<a href="#">Aviso de Privacidad</a>
					<a href="#">Condiciones de Uso</a>
				</div>
			</div>
		</div>

	</footer>
</body>
<script src="js/jScrollPane.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/SelectBox.js"></script>
<script>
	var navigation;
	$(function(){
		$("select.custom.left").each(function() {
			var sb = new SelectBox({
				selectbox: $(this),
				width: 138
				// height: 25
			});
		});
		$("select.custom.right").each(function() {
			var sb = new SelectBox({
				selectbox: $(this),
				width: 218
				// height: 25
			});
		});
		navigation = responsiveNav('.main-nav');
	});
</script>
</html>