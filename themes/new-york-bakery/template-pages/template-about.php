<?php
/*
 * Template Name: About Us
 * */

get_header(); ?>

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min-1.12.4.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.timelinr-0.9.6.js"></script>

	<script>
		$( function() {
			$().timelinr( {
				autoPlayDirection : 'forward'
			} );
		} );
	</script>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
endwhile; endif;
?>

	<div class="gray-bg" style="padding: 22px 0 25px;">
		<h4 class="timeline-header">OUR HISTORY</h4>
		<div id="timeline">
			<ul id="dates">
				<li><a href="#1920" style="opacity:0;">1920</a></li>
				<li><a href="#1930" style="opacity:0;">1930</a></li>
				<li><a href="#1944" style="opacity:0;">1944</a></li>
				<li><a href="#1950" style="opacity:0;">1950</a></li>
				<!--<li><a href="#1971">1971</a></li>-->
				<!--<li><a href="#1977">1977</a></li>
				<li><a href="#1989">1989</a></li>
				<li><a href="#1999">1999</a></li>
				<li><a href="#2001">2001</a></li>
				<li><a href="#2011">2011</a></li>-->
			</ul>
			<ul id="issues">
				<li id="1920">
					<h1>1920</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam
						pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu
						velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed
						turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non
						vel leo. Sed fringilla porta ligula.</p>
				</li>
				<li id="1930">
					<h1>1930</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam
						pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu
						velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed
						turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non
						vel leo. Sed fringilla porta ligula.</p>
				</li>
				<li id="1944">
					<h1>1944</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam
						pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu
						velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed
						turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non
						vel leo. Sed fringilla porta ligula.</p>
				</li>
				<li id="1950">
					<h1>1950</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam
						pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu
						velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed
						turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non
						vel leo. Sed fringilla porta ligula.</p>
				</li>
				<!--<li id="1971">
					<h1>1971</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
				</li>-->
				<!--<li id="1977">
					<h1>1977</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
				</li>
				<li id="1989">
					<h1>1989</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
				</li>
				<li id="1999">
					<h1>1999</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
				</li>
				<li id="2001">
					<h1>2001</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
				</li>
				<li id="2011">
					<h1>2011</h1>
					<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
				</li>-->
			</ul>
			<!--<div id="grad_left"></div>
			<div id="grad_right"></div>-->
			<!--<a href="#" id="next">+</a>
			<a href="#" id="prev">-</a>-->
		</div>
	</div>

<?php
get_footer();
