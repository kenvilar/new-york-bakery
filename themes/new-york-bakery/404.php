<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link    https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package New_York_Bakery
 */

get_header(); ?>

	<div class="new-york-bakery-container-fluid">
		<div class="container-fluid main-content">

			<div class="white-bg error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'new-york-bakery' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'new-york-bakery' ); ?></p>
					
					<?php
					get_search_form();
					
					//the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<!--<div class="widget widget_categories">
						<h2 class="widget-title"><?php /*esc_html_e( 'Most Used Categories', 'new-york-bakery' ); */ ?></h2>
						<ul>
							<?php
					/*							wp_list_categories( array(
													'orderby'    => 'count',
													'order'      => 'DESC',
													'show_count' => 1,
													'title_li'   => '',
													'number'     => 10,
												) );
												*/ ?>
						</ul>
					</div>-->
					
					<?php
					
					/* translators: %1$s: smiley */
					/*$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'new-york-bakery' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					
					the_widget( 'WP_Widget_Tag_Cloud' );*/
					?>

				</div>
			</div><!-- .error-404 -->

		</div>
	</div>

<?php
get_footer();
