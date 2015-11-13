	<?php get_header(); ?>

	</header>
<!--///////////////////////////////////// MAIN-->
	<section id="main" class="main">
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
		<div class="wrapper">
			<div class="grid-1-3">
				<p class="personal nh">Personal</p>
			</div>
			<div class="grid-1-3">
				<p class="responsive nh">Responsive</p>
			</div>
			<div class="grid-1-3">
				<p class="unique nh">Unique</p>
			</div>
		</div>
		<div class="img mountain"></div>
	</section>

<!--///////////////////////////////////// ABOUT-->
	<section id="about" class="about">
		<h1>About Me</h1>
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