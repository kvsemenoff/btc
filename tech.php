<?php require_once('includes/header.php'); ?>

<br><br>		
<a href="#" class="button-1">Login</a>	
<br><br>	
<h2>Пример заголовка</h2>
<br><br>	
<form class="dd-form" action="#">
	
	<input type="text" value="" placeholder="Инпут тайп текст">		
	<input type="submit" class="button-1 button-1_submit" value="Login">	

</form>	<br>
<h2>Поп ап WON</h2>
<a href="#log-in" name="modal">won</a><br><br>
<a href="#log-in_payments" name="modal">payments</a><br><br>
<a href="#log-in_payments__calc" name="modal">payments calc</a><br><br>









<div id="mask"></div>

<!-- Won -->
<div id="log-in" class="window">
	<div class="pop-won">
		<h3>Congratulation</h3>
		<div class="won-img">
			<img src="img/med.png" alt="">
		</div>
		<h3>You win battle!</h3>
		<span class="dd-light">Light</span><br>
		<span class="won_gold">15 650</span><br>
		<a class="button-1 button-1_won close2" href="#">OK</a>
	</div>
</div>
<!-- end won -->

<!-- Payments -->
<div id="log-in_payments" class="window">
	<div class="pop-won pop-payments">
		<h3>Payments</h3>
		<div class="won-img">
			<img src="img/g.png" alt="">
		</div>
		<h3>Your reuest are submited.</h3>
		<span>Send as many Bitcoins you would like to the 
			address above. The amount will be credited to 
			your account as soon as it enters the blockchain, 
			which will typically take a few seconds.</span><br>
			<a class="button-1 button-1_won close2" href="#">OK</a>
		</div>
	</div>
	<!-- End Payment -->

	<!-- Payments_calc -->
	<div id="log-in_payments__calc" class="window">
		<div class="pop-won pop-payments__calc">
			<h3>Payments</h3>
			<span class="dd-grey_txt">Balance</span><br>
			<span class="won_gold">18.256</span><br>
			<span class="dd-grey_txt">Calculator</span><br>
				<a class="button-1 button-1_won close2" href="#">Reqwest</a>
			</div>
		</div>
		<!-- END Payments_calc -->


		<?php require_once('includes/footer.php'); ?>


	</body>
	</html>

