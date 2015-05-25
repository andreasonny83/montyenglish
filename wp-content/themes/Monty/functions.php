<?php
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

/**
 * [add_google_map]
 * place the Google map into the page
 */
function add_google_map() {
	$theme_root = get_template_directory_uri();
	$output = '
	<div id="map">
	<div id="map_canvas"></div>
	</div>
	<script src="//maps.googleapis.com/maps/api/js"></script>
	<script src="' . $theme_root . '/js/gmap.min.js"></script>
	';

	return $output;
}

function add_social_buttons( $atts ) {
	$a = shortcode_atts( array( 'position' => '' ), $atts );
	$output = '
		<a href="//www.facebook.com/montyenglish" class="btn-social btn-outline ' . $a['position'] . '"><i class="fa fa-fw fa-facebook"></i></a>
		<a href="//plus.google.com/u/0/110137875667379799657/" class="btn-social btn-outline ' . $a['position'] . '"><i class="fa fa-fw fa-google-plus"></i></a>
		<a href="//twitter.com/Monty_English" class="btn-social btn-outline ' . $a['position'] . '"><i class="fa fa-fw fa-twitter"></i></a>
		<a href="//www.meetup.com/monty-english" class="btn-social btn-outline ' . $a['position'] . '"><i class="fa zocial meetup"></i></a>
	';

	return $output;
}

function add_contact_form( $atts ) {
	$a = shortcode_atts( array( 
		'name'	  => 'Name',
		'email'   => 'Email address',
		'message' => 'Message',
		'send'    => 'Send'
		), $atts );

	$publickey = RECAPTCHA_PUBKEY;
	# the response from reCAPTCHA
	$resp = null;
	# the error code from reCAPTCHA, if any
	$error = null;
	# get the current page URL
	$permalink = get_permalink( $id, $leavename );

	$output = "
		<form action='" . $permalink . "' method='post' id='contact_form'>
		<div class='form-group col-xs-12 floating-label-form-group'>
		<label for='name'>$a[name]</label>
		<input class='form-control' type='text' name='form_name' placeholder='$a[name]' required/>
		</div>
		<div class='form-group col-xs-12 floating-label-form-group'>
		<label for='email'>$a[email]</label>
		<input class='form-control' type='email' name='form_email' placeholder='$a[email]' required/>
		</div>
		<div class='form-group col-xs-12 floating-label-form-group'>
		<label for='message'>$a[message]</label>
		<textarea placeholder='$a[message]' name='form_message' class='form-control' rows='5' required></textarea>
		</div>
		<div class='form-group-captcha col-xs-12'>";

	$output .= recaptcha_get_html($publickey);

	$output .= "</div>
		<div class='form-group col-xs-12'>
		<button type='submit' name='form_submit' class='btn btn-lg btn-success'>$a[send]</button>
		</div>
		</form>
	";

	return $output;
}

remove_action( 'wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link'); // index link
remove_action( 'wp_head', 'parent_post_rel_link'); // prev link
remove_action( 'wp_head', 'start_post_rel_link'); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link'); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version

// you may just want to kill all your RSS Feeds, wordpress does provide
remove_action('do_feed', 'disable_all_feeds', 1);
remove_action('do_feed_rdf', 'disable_all_feeds', 1);
remove_action('do_feed_rss', 'disable_all_feeds', 1);
remove_action('do_feed_rss2', 'disable_all_feeds', 1);
remove_action('do_feed_atom', 'disable_all_feeds', 1);

add_shortcode( 'map', 'add_google_map' );
add_shortcode( 'contact-form', 'add_contact_form' );
add_shortcode( 'socials', 'add_social_buttons' );

add_theme_support( 'menus' );
add_action( 'init', 'register_my_menus' );
?>
