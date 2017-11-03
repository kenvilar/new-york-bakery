<?php
/*
 * Template Name: About Us
 * */

get_header(); ?>

	<script type="text/javascript">
		//jQuery Timeline Slider
		jQuery( function( $ ) {
			$().timelinr( { autoPlayDirection : 'forward' } );
		} );
	</script>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content(); endwhile; endif;
wp_reset_query();
?>

	<div class="gray-bg timeline-history">
		
		<?php if ( have_rows( 'timeline_slider' ) ) : ?>
			<h4 class="timeline-header">OUR HISTORY</h4>
			<div class="timeline-slider-dots"></div>
			<section class="lazy my-timeline-slider" data-sizes="50vw">
				<div>
					<h1>1951</h1>
					<p>Upon arriving in America from Greece in 1951, our grandfather, Chris Christou, found work at
						Columbus Bakery in Syracuse, New York from where he went on to open Solvay Bakery in 1956.</p>
				</div>
				<div>
					<h1>1963</h1>
					<p>By 1963, Chris Christou’s hard work was rewarded by receiving product orders from major
						supermarkets, making Solvay Bakery the largest of its kind in the area.</p>
				</div>
				<div>
					<h1>1977</h1>
					<p>In 1977, our father, Jim Christou’s passion for the family business fueled his decision to
						purchase New York Bakery which was originally founded in 1927 in Syracuse.</p>
				</div>
				<div>
					<h1>1986</h1>
					<p>By 1986, Jim Christou’s commitment to his customers and dedication to his business expanded New
						York Bakery from a small storefront to a 10,000 square foot facility. Like our father who worked
						everyday after school learning the trade, we three brothers, Mike, Petros, and Chris worked
						alongside of our father and Grandpa was always around to help.</p>
				</div>
				<div>
					<h1>1999</h1>
					<p>In 1999, the third generation of the Christou family dedicated themselves to the success of the
						family’s business and securing New York Bakery’s future for generations to come in it’s 60,000
						square foot bakery.</p>
				</div>
				<div>
					<h1>TODAY</h1>
					<p>Today, the company continues to grow and prosper under the direction of Mike, Petros, and Chris
						as they carry on the history that is at the heart of New York Bakery and offer their own
						personal commitment to product quality and service excellence.</p>
				</div>
			</section>
			<!--<div id="timeline">
				<div class="timeline-wrap">
					<ul id="dates">
						<?php /*while ( have_rows( 'timeline_slider' ) ) : the_row(); */ ?>
							
							<?php /*if ( get_sub_field( 'year' ) ) : */ ?>
								<li><a href="#<?php /*the_sub_field( 'year' ); */ ?>">
										<span style="opacity:0;"><?php /*the_sub_field( 'year' ); */ ?></span></a>
								</li>
							<?php /*endif; */ ?>
						<?php /*endwhile;
						wp_reset_postdata(); */ ?>
					</ul>
					<ul id="issues">
						<?php /*while ( have_rows( 'timeline_slider' ) ) : the_row(); */ ?>
							<li id="<?php /*the_sub_field( 'year' ); */ ?>">
								
								<?php /*if ( get_sub_field( 'year' ) ) : */ ?>
									<h1><?php /*the_sub_field( 'year' ); */ ?></h1>
								<?php /*endif; */ ?>
								
								<?php /*if ( get_sub_field( 'timeline_content' ) ) : */ ?>
									<p><?php /*the_sub_field( 'timeline_content' ); */ ?></p>
								<?php /*endif; */ ?>

							</li>
						<?php /*endwhile;
						wp_reset_postdata(); */ ?>
					</ul>
					<?php /*/*echo '<div id="grad_left"></div><div id="grad_right"></div>'; */ ?>
					<div class="next-and-prev">
						<a href="#" id="next">+</a>
						<a href="#" id="prev">-</a>
					</div>
				</div>
			</div>-->
		<?php endif;
		wp_reset_query(); ?>

	</div>

<?php
get_footer();
