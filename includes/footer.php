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