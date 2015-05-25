<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @link http://www.montyenglish.co.uk/
 * 
 * @package WordPress
 * @subpackage Monty_English_Theme
 * @since Monty English Theme 2.0
 */

get_header(); ?>

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
	<div id="404" style="padding-top:100px;">
		<h1 style="line-height: 100px;font-size: 60px;">404 Page Error</h1>
		<h2>This is somewhat embarrassing, isn&rsquo;t it?</h2>
		<p>It appears the page you&rsquo;re looking for is empty. Use the menu to navigate into another section of the website.</p>
	</div>
</section>

<?php get_footer(); ?>