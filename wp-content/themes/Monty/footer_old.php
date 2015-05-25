			<footer class="text-center">
				<div class="footer-above">
					<div class="container">
						<div class="row">
							<?php
							// query for the page using either (not both!) one of the two following lines
							$bottom_page_query = new WP_Query( array ( 'post_type' => 'page', 'sort_column' => 'post_title', 'meta_key' => 'position', 'meta_value' => 'footer', 'post_status' => 'publish' ) );
							// $query = new WP_Query( array ( 'orderby' => 'meta_value', 'meta_key' => 'position' ) );
							// loop through the query (even though it's just one page)
							while ( $bottom_page_query->have_posts() ) : $bottom_page_query->the_post();
								the_content();
							endwhile;

							// reset post data (important, don't leave out!)
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
				<div class="footer-below">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								Copyright &copy; <?php echo date("Y") ?> - Monty English Ltd. Developed by <a href="mailto:andreasonny83@gmail.com">SonnY</a> - All right reserved.
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/montyenglish.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>