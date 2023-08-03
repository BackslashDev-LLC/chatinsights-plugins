<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    wp_chatinsights_widget
 * @subpackage wp_chatinsights_widget/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    wp_chatinsights_widget
 * @subpackage wp_chatinsights_widget/includes
 * @author     Your Name <email@example.com>
 */
class wp_chatinsights_widget_i18n
{


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain()
	{

		load_plugin_textdomain(
			'wp-chatinsights-widget',
			false,
			dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
		);

	}



}