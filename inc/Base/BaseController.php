<?php 
/**
 * @package  AbdatPlugin
 */
namespace Inc\Base;

class BaseController
{
	public $plugin_path;

	public $plugin_url;

	public $plugin;

	public $managers = array();

	public function __construct() {
		$this->plugin_path = plugin_dir_path( dirname( __FILE__, 2 ) );
		$this->plugin_url = plugin_dir_url( dirname( __FILE__, 2 ) );
		$this->plugin = plugin_basename( dirname( __FILE__, 3 ) ) . '/abdat-plugin.php';

		$this->managers = array(
			'cpt_manager' => 'Activate CPT Manager',
			'taxonomy_manager' => 'Activate Taxonomy Manager',
			'testimonial_manager' => 'Activate Testimonial Manager'
		);
	}

	public function activated( string $key )
	{
		$option = get_option( 'abdat_plugin' );

		return isset( $option[ $key ] ) ? $option[ $key ] : false;
	}
}