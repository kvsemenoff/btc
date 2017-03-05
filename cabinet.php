<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cabinet</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>



	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>


	
	<section class="section section_padding section_header">
		<div class=" container header_container">
			<div class="row">
				<div class="col-md-4">
					<div class="dd-logo">
						<a href="#"><img src="img/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="box-wrap">
						<div class="dd-box-header">
							<span>1 = 100 satoshi</span>
							<span class="dftopcap">Online - <em>7 698</em> users</span>
						</div>
						<div class="dd-box-header dfmymr">
							<a class="button-1 dfcabbutton" href="#"><img src="img/money2.png" alt="">18.256M<span>+</span></a>
						</div>
						<div class="dd-box-header">
							<a class="button-1 button-1__padding" href="#">Cabinet</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section>

	<div class="dfborder100"></div>	
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">					
							<div class="dflogin">
								<span>Login - </span>1EJ7FEgPngFnTv41x7zApEcMXgDk6UVhdq
								<a href="#" class="dflogout">Logout</a>							
							</div>
							
							
							<div class="dfbalance">
							<a href="#log-in_pass" name="modal" class="dflogout dflogout2">Change password</a>
							<div class="clearfix"></div>
								<div class="dfboxcab">
									<span class="dfba">My balance:</span>
									<span class="dfba2">18.256M</span>
								</div>
								<div class="dfboxcab">
									<span class="dfba">Demo:</span>
									<span class="dfba2 dfright">500</span>
								</div>
								<a href="#" class="dflinks1">Add more coins</a>
								<a href="#" class="dflinks2">Payments</a>
							</div>
						</div>
					</div>
				</div>
			</section>	
			<div class="dfborder100"></div>		

			<div class="clearfix"></div>

	<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">			
					<div class="dftextblock">
						<h4>Partner program</h4>
						<p>We share the promotional code with your friends and get <br>
						10% of their revenue. In addition, earn 100 coins for each invitation
						  other (which activates your code and earn 100 coins). A friend who
						  activates the code will get 100 coins to your account.</p>
						
						<span class="dfyourlink">Your link:</span>	
						<input type="text" class="dfinp" value="www.btcbattle.com/djd#5/dfsdf">
						<a href="#" class="dfbuttoncopy">Copy</a>

						<span class="dffriend">Earned from friends:</span>
						<span class="dfmycoins">1820 coins</span>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<div class="dfborder100"></div>		
	<div class="clearfix"></div>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">		
					<div class="dfgetcoin">
						<span class="dfbonus">Daily bonus:</span>
						<span class="df3coins">3 coins</span>
						<a href="#">Get</a>
					</div>
				</div>
			</div>
		</div>
	</section>	
				
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

</body>
</html>