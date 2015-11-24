	<?php get_header(); ?>

	</header>
<!--///////////////////////////////////// MAIN-->
	<section id="main" class="main">


		<script type="text/javascript">
			var $ = jQuery.noConflict();
			$(document).ready(function() {
					var radioButtons = [false, false, false];

					$("input[type='radio'].radioButton").click(function() {
						if( radioButtons[$(this).index("input[type='radio']")] == true ) { // if clicking on self
							$(this).prop('checked', false);								   // unselect self
							radioButtons[$(this).index("input[type='radio']")] = false;
						}
						else {															// if clicking another
							radioButtons = [false, false, false];
							$("input[type='radio'].radioButton").prop('checked', false);	// unselect all
							radioButtons[$(this).index("input[type='radio']")] = true;	// select self
							$(this).prop('checked', true);
						}
					});
				});
		</script>


		<div class="img cloud"></div>
		<header>
			<nav>
				<a href="#about">About</a>
				<a href="#portfolio">Portfolio</a>
				<a href="#contact">Contact</a>
			</nav>
		</header>
		<div class="brand">
			<h1>Hello. My name is Tyler Phass.</h1>
			<h2>And I am a <span>nerd</span> who loves making websites and hiking mountains.</h2>
		</div>
		<input id="mainButton-left" class="radioButton" type="radio" name="mainButton1"></input>
		<input id="mainButton-center" class="radioButton" type="radio" name="mainButton2"></input>
		<input id="mainButton-right" class="radioButton" type="radio" name="mainButton3"></input>
		<div class="wrapper">			
			<div class="grid-1-3">
				<div class="button personal nh">
					Personal
					<label for="mainButton-left"></label>
					<div class="modal-info m1">
						<p>
							Communication is key to any project. That is why I make it a point to be easy to contact throughout the entirity of your web project.
						</p>
					</div>
				</div>
			</div>
			<div class="grid-1-3">
				<div class="button responsive nh">
					Responsive
					<label for="mainButton-center"></label>
					<div class="modal-info m2">
						<p>
							My sites are mobile and tablet friendly! That means that no matter what device is being used to view your site, it will look amazing and be easy to use!
						</p>
					</div>
				</div>
			</div>
			<div class="grid-1-3">
				<div class="button unique nh">
					Unique
					<label for="mainButton-right"></label>
					<div class="modal-info m3">
						<p>
							I make custom designs for every client. I am here to make your website look exactly how you want it to.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="img mountain"></div>
	</section>

<!--///////////////////////////////////// ABOUT-->
	<section id="about" class="about">
		<h1>About Me</h1>
		<h2>I have experience working with:</h2>
		<h2>Things that I enjoy:</h2>
		<p>CSS3</p>
		<p>HTML5</p>
		<p>MySQL</p>
		<p>WordPress</p>
		<p>SASS</p>
		<p>PHP</p>
		<p>Javascript & Jquery</p>
		<p>Github</p>
		<p>Playing with my cat</p>
		<p>Smoking Pipe Tobacco</p>
		<p>Reading Theology</p>
		<p>Writing Poetry</p>	
		<div class="portrait" role="img"></div>
		<a href="#main" class="scrollButton up fa fa-chevron-circle-up"></a>
		<a href="#portfolio" class=" scrollButton down fa fa-chevron-circle-down"></a>
	</section>

<!--///////////////////////////////////// PORTFOLIO-->
	<section id="portfolio" class="portfolio">
		<h1>Portfolio</h1>
		<a href="#about" class="scrollButton up fa fa-chevron-circle-up"></a>
		<a href="#contact" class=" scrollButton down fa fa-chevron-circle-down"></a>
	</section>

<!--///////////////////////////////////// CONTACT-->
	<section id="contact" class="contact">
		<h1>Contact</h1>
		<p>Want to hire me for your next web project?</p>
		<p>Or, just want to ask me a question?</p>
		<form id="contactform" method="post" action="js/processForm.php" novalidate="novalidate">
			<input id="name" type="text" placeholder="Your Name" name="name">
			<input id="email" type="text" placeholder="YourEmail@Somewhere.Something" name="email">
			<textarea id="message" style="resize:none" placeholder="Your Message" cols="40" rows="2" name="message"></textarea>
			<input id="send" type="submit" value="Send">
		</form>
		<a href="#main" class="scrollButton down fa fa-chevron-circle-up"></a>
	</section>

<!--///////////////////////////////////// SCRIPTS-->
	<script type="text/javascript">
		var $ = jQuery.noConflict();
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});
	</script>
</div>
<?php get_footer(); ?>