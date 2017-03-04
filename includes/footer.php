<section class="dd-footer">
	<div class="container header_container">
		<div class="row">
			<div class="col-md-4">
				<div class="dd-footer_menu">
					<ul id="js-nav">
						<li><a href="#home">Home</a></li>
						<li><a href="#rules">Rules</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="dd-copy">
					<span>© BTC Battle</span>
				</div>
			</div>
		</div>
	</div>
</section>
		<!-- Change pass -->
		<div id="mask"></div>
		<div id="log-in_pass" class="window">
			<div class="pop-won pop-pass">
				<h3>Change Password</h3>
				<div class="dd-btc-wallet">
					<div class="dd-brc-number dd-pass-inputs">
						<span>Current password</span>
						<input type="password" value="12345678">	
						<span>New password</span>
						<input type="password" value="12345678">	
						<span>Confirm new password</span>
						<input type="password" value="12345678">	
					</div>
					<div class="dd-pass-but">
						<a class="button-1 button-1_won" href="#">Change</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End changepass -->
<script>
	$("#js-nav a").click(function(e){
		e.preventDefault();
		var currentBlock = $(this).attr("href");
		currentBlockoffset = $(currentBlock).offset().top;
		$("html, body").animate({
			scrollTop: currentBlockoffset
		}, 500);
	});
</script>