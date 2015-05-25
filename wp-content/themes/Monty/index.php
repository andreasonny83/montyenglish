<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://www.montyenglish.co.uk/
 *
 * @package WordPress
 * @subpackage Monty_English_Theme
 * @since Monty English Theme 2.0
 */

get_header();
require_once( 'send.php' );
?>
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="toggle-nav navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Monty English School</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'sort_column' => 'menu_order', 'container' => false, 'menu_id' => 'main_menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<div id="site-menu">
		<a id='close_button' href='#'><i class="fa fa-times"></i></a>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'sort_column' => 'menu_order', 'container' => false, 'menu_id' => 'responsive_menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
	</div>
	<section>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('container');?> >
					<div class="entry clear">
						<?php the_content(); ?>
					</div><!--. entry-->
				</div><!-- .post-->
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<?php endif; ?>
	</section><!--.content-->

<?php get_footer(); ?>