<?php include('includes/header.php');?>



<?php include('includes/navbar.php');?>


<!-- CONTACT -->
		<div id="contact" class="main-section not-home green">	
			<div class="contact pad-bot blue-bg">
				<div class="container">
					<div class="title page-title text-center">
						<h1 class="light-text">Contact</h1>
						<span class="underline white"></span>
					</div>	
				</div>																
				<div class="container">
					<!-- ADDRESSES AND SOCIALS -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 smxs-margin animated-slide-top custom-animation-slide-top">																				
						<h6 class="uppercase colored-text">Address</h6>
						<p class="address">
							Helix Engineering
							<br>
							P.O BOX 44600-00100
							<br>
							Nairobi, Kenya 
							<br>
							<abbr title="Phone">P:</abbr>
							<span>+254797645969</span>
							<br>
							<abbr title="Fax">F:</abbr>
							<span>+254797645969</span>
							<br>
							e-mail: <a href="mailto:office@example.com">vincentakulinda@gmail.com</a>
						</p>
						<h6 class="uppercase colored-text">Socials</h6>
						<div class="footer-icons">							
							<a href="http://www.twitter.com/"><i class="icon-twitter"></i></a>
							<a href="http://www.facebook.com/"><i class="icon-facebook"></i></a>
							<a href="http://www.linkedin.com/"><i class="icon-linkedin"></i></a>
							<a href="http://www.google.com/"><i class="icon-google-plus"></i></a>																							
						</div>
					</div>
					<!-- CONTACT FORM -->
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 animated-fade custom-animation-fade">
						<form method="post" class="contact-form">
							<fieldset>
								<input type="text" name="name" placeholder="Name" class="col-xs-12 col-sm-12 col-lg-12 input-text" id="namecon">
								<input type="text" name="email" placeholder="E-mail" class="col-xs-12 col-sm-12 col-lg-12 input-text" id="emailcon">
								<textarea rows="6" name="comments" placeholder="Message" class="col-xs-12 col-sm-12 col-lg-12 input-text" id="commentcon"></textarea>
								<div class="btn-wrapper"><input type="button" value="Submit" onclick="ajax.send()" class="uppercase btn btn-primary btn-large btn-input" id="sendcon"></div>
							</fieldset>	
						</form>		
					</div>
				</div>																																					
			</div>
		</div>
		<!-- END OF contact -->	
		<?php include('includes/script.php');?>	


		<?php include('includes/footer.php');?>	