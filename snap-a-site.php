<?php
/*Plugin Name: Snap A Site
Plugin URI: http://en.ibabar.com
Description: The easiest way to take and embed snapshot of a site on Wordpress blog.
Version: 1.2
Author: Babar
Author URI: http://www.iBabar.com
Requires at least: 3.0
Tested Up to: 3.5
Stable Tag: 1.2
License: GPL v2
*/

function snap_shortcode($atts, $content = null) {
        extract(shortcode_atts(array(
			"url" => 'http://www.ibabar.com',
                        "link" => '#',
			"alt" => 'Snap A Site',
			"w" => '400',
			"h" => '300',
			"title" => '',
			"target" => '',
			"rel" => '',
        ), $atts));

          return '<a href="' . esc_attr($link) . '" title="' . esc_attr($title) . '" target="' . esc_attr($target) . '" rel="' . esc_attr($rel) . '"><img src="http://s.wordpress.com/mshots/v1/' . urlencode($url) . '?w=' . esc_attr($w) . '&amp;h=' . esc_attr($h) . '" alt="' . esc_attr($alt) . '"/></a>';
}

add_shortcode('snap', 'snap_shortcode');



?>
