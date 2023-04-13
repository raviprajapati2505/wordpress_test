<?php

/**
 * Fired during plugin activation
 *
 * @since      1.0.0
 *
 * @package    Wordpress_Custom_Plugin
 * @subpackage Wordpress_Custom_Plugin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wordpress_Custom_Plugin
 * @subpackage Wordpress_Custom_Plugin/includes
 * @author     Ravi Prajapati <raviprajapati2505@gmail.com>
 */
class Wordpress_Custom_Plugin_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$page_id = wp_insert_post(
			array(
			'comment_status' => 'close',
			'ping_status'    => 'close',
			'post_author'    => 1,
			'post_title'     => ucwords('Pixlogix'),
			'post_name'      => 'pixlogix_test',
			'post_status'    => 'publish',
			'post_content'   => '[pixlogix_show_posts]',
			'post_type'      => 'page',
			'post_parent'    => 'id_of_the_parent_page_if_it_available'
			)
		);
	}

}
