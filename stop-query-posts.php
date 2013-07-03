<?php
/**
 * Plugin Name: Stop query_posts
 */

function please_stop_this_query_posts_madness( $query ) {
	if ( $query === $GLOBALS['wp_query'] && ! $query->is_main_query() )
		_doing_it_wrong( 'query_posts', 'You should <a href="http://wordpress.tv/2012/06/15/andrew-nacin-wp_query/">not use query_posts</a>.' , null );
}
add_action( 'pre_get_posts', 'please_stop_this_query_posts_madness', 99, 1 );