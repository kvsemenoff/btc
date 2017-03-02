
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="df-coinsblock">
						<span class="dftopcap">Online - <em>7 698</em> users</span>
						<div class="dftopblock">
							<span class="dfchar1">DEMO</span>
							<div class="dfbox dfbox1">
								<span class="txt1">Last bet:</span>
								<span class="txt2">vxcv**ggjbkcvl9293*42</span>
								<span class="txt3">Prize:</span>
								<h4 class="dfprice">500</h4>
								<span class="txt4">00:04</span>				
								<span class="txt5">Bet</span>
								<a href="#" class="dfbutton1"><img src="img/money1.png" alt="">100</a>				
							</div>
						</div>
						<div class="dftopblock ">
							<span class="dfchar2">Light</span>
							<div class="dfbox dfbox2">
								<span class="txt1">Last bet:</span>
								<span class="txt2">vxcv**ggjbkcvl9293*42</span>
								<span class="txt3">Prize:</span>
								<h4 class="dfprice">1200</h4>
								<span class="txt4">00:44</span>				
								<span class="txt5">Bet</span>
								<a href="#" class="dfbutton2"><img src="img/money2.png" alt="">10</a>				
							</div>
						</div>
						<div class="dftopblock ">
							<span class="dfchar3">Medium</span>
							<div class="dfbox dfbox3">
								<span class="txt1">Last bet:</span>
								<span class="txt2">vxcv**ggjbkcvl9293*42</span>
								<span class="txt3">Prize:</span>
								<h4 class="dfprice">10K</h4>
								<span class="txt4">00:56</span>				
								<span class="txt5">Bet</span>
								<a href="#" class="dfbutton3"><img src="img/money2.png" alt="">50</a>				
							</div>
						</div>
						<div class="dftopblock ">
							<span class="dfchar4">Maximum</span>
							<div class="dfbox dfbox4">
								<span class="txt1">Last bet:</span>
								<span class="txt2">vxcv**ggjbkcvl9293*42</span>
								<span class="txt3">Prize:</span>
								<h4 class="dfprice">12,45M</h4>
								<span class="txt4">00:19</span>				
								<span class="txt5">Bet</span>
								<a href="#" class="dfbutton4"><img src="img/money2.png" alt="">100</a>				
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<input type="text" value="" class="summ" pattern="\d [0-9]" id="i">
	<span class="showsumm"></span>

	 <script type="text/javascript">
	 
	 	$('.summ').keyup(function(e){
	 		var s = $('.showsumm');
	  		var summ = $(this).val();
	  		var summNumber = parseInt(summ);

			var dollar_c = 50; // По соотношению
			var rubble_c = 1; // По соотношению			
			
			var out = summNumber * (rubble_c / dollar_c);

			if(summNumber < 5){					 	
			 	s.text("< 5");	
			}
			else{
				s.text(out);	
			}
			if(/[^[0-9]/.test(summNumber)){
				$('.summ').val(" ");
				s.text("");
			}		 
	 	});  		

     </script>
