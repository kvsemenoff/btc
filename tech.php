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
<h2>Popup</h2>
<a href="#log-in" name="modal">won</a><br><br>
<a href="#log-in_payments" name="modal">payments</a><br><br>
<a href="#log-in_payments__calc" name="modal">payments done</a><br><br>
<a href="#log-in_add_coins" name="modal">add coins</a><br><br>









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
			<span class="won_gold">18.256M</span><br>
			<span class="dd-grey_txt">Calculator</span><br>
			<div class="dd-calc-wrap">
				<label class="dd-float_left">
					<input type="text" placeholder="1854">
				</label>
				<div class="dd-result dd-float_left">
					<span>=</span>
					<span class="number_result">0.00000002</span>
					<span>BTC</span>
				</div>
			</div>
			<span class="dd-min">minimum 15 coins</span><br>

			<div class="dd-btc-wallet">
				<span>BTC Wallet</span>
				<div class="dd-brc-number">
					<input type="text" placeholder="1EJ7FEgPngFnTv41x7zApEcMXgDk6UVhdq">	
				</div>
				<div class="calc_txt">
					<span>Request as many Bitcoins you would like to the 
						address above. The amount will be uncredited to 
						your account as soon as it enters the blockchain, 
						which will typically take a few seconds.</span>
					</div>
				</div>

				<a class="button-1 button-1_won" href="#">Reqwest</a>
			</div>
		</div>
		<!-- END Payments_calc -->

		<!-- Add coins -->
		<div id="log-in_add_coins" class="window">
			<div class="pop-won pop-payments__calc">
				<h3>Add coins</h3>
				<div class="dd-btc-wallet">
					<span>BTC Wallet</span>
					<div class="dd-brc-number">
						<input type="text" placeholder="1EJ7FEgPngFnTv41x7zApEcMXgDk6UVhdq">	
					</div>
					<div class="calc_txt">
						<span>Send as many Bitcoins you would like to the 
							address above. The amount will be credited to 
							your account as soon as it enters the blockchain, 
							which will typically take a few seconds.</span>
						</div>
					</div>
					<span class="dd-grey_txt">Comission 5%</span><br>

					<a class="button-1 button-1_won" href="#">Copy</a><br>
					<span class="dd-grey_txt">Calculator</span><br>
					<div class="dd-calc-wrap">
						<label class="dd-float_left">
							<input type="text" placeholder="1854">
						</label>
						<div class="dd-result dd-float_left">
							<span>=</span>
							<span class="number_result">0.00000002</span>
							<span>BTC</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End add coins -->

		<?php require_once('includes/footer.php'); ?>


	</body>
	</html>

