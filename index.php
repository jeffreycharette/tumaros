<?php require 'top.php'; ?>
<!--
	HOMEPAGE:
 	slideshow -> content to be added by andrea tager provided in 4 images
	TODO:
		- update alt tags with text from each slide for accessibility
		- update href links with links to appropriate content based on slide
-->
<style>
	/* override wrapper background for this page only */
	.main > .wrapper { background: transparent none; padding: 0;
		-webkit-box-shadow: none;
		   -moz-box-shadow: none;
		     -o-box-shadow: none;
		        box-shadow: none; }
</style>
<div class="main_view">
	<div class="window">
		<div class="image_reel">
			<a href="#"><img src="images/slideshow/1.jpg" alt="Slide 1" /></a>
			<a href="#"><img src="images/slideshow/2.jpg" alt="Slide 2" /></a>
			<a href="#"><img src="images/slideshow/3.jpg" alt="Slide 3" /></a>
			<a href="#"><img src="images/slideshow/4.jpg" alt="Slide 4" /></a>
			<a href="#"><img src="images/slideshow/5.jpg" alt="Slide 5" /></a>
		</div>
	</div>
	<img src="images/slideshow/shadow.png" alt=" " /><!-- shadow -->
	<div class="paging">
		<a href="#" rel="1"></a>
		<a href="#" rel="2"></a>
		<a href="#" rel="3"></a>
		<a href="#" rel="4"></a>
		<a href="#" rel="5"></a>
	</div>
</div>
<p class="facebook-like-counter"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FWoodstockFoods&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:700px; height:35px;" allowTransparency="true"></iframe></p>
<?php require 'bottom.php'; ?>
