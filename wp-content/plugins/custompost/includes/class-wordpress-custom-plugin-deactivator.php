<?php

/**
 * Fired during plugin deactivation
 *
 * @since      1.0.0
 *
 * @package    Wordpress_Custom_Plugin
 * @subpackage Wordpress_Custom_Plugin/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Wordpress_Custom_Plugin
 * @subpackage Wordpress_Custom_Plugin/includes
 * @author     Ravi Prajapati <raviprajapati2505@gmail.com>
 */
class Wordpress_Custom_Plugin_Deactivator
{

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate()
	{
		$args = array(
			'post_type' => 'page'
		);
		$query = new WP_Query($args);
		if ($posts = get_posts($args)) {
			foreach ($posts as $post) {
				if ($post->post_name == 'pixlogix_test')
					wp_delete_post($post->ID, true);
			}
		}
		wp_reset_postdata();
	}
}
