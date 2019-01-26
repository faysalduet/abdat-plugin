<?php
/**
 * @package AbdatPlugin
 */
namespace Inc\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();

		$default = array();

		if ( ! get_option( 'abdat_plugin' ) ) {
			update_option( 'abdat_plugin', $default );
		}

		if ( ! get_option( 'abdat_plugin_cpt' ) ) {
			update_option( 'abdat_plugin_cpt', $default );
		}

		if ( ! get_option( 'abdat_plugin_tax' ) ) {
			update_option( 'abdat_plugin_tax', $default );
		}
	}
}