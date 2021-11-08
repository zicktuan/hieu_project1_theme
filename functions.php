<?php

if (!defined('ABSPATH')) {
	exit('No direct script access allowed');
}

/**
 * @package AwesomeTheme
 * @version 1.0
 * @author Nguyen Anh Tuan
 *
 * Class Init for theme
 */
class AwesomeTheme {
	static $getInstance = null;

	public $version = '1.0';

	public static function getInstance() {
		if (!(self::$getInstance instanceof self)) {
			self::$getInstance = new self();
		}
		return self::$getInstance;
	}

	protected function __construct() {
		// Init scripts for theme.
		$this->AwesomeScripts();
		$this->includeFunction();
		$this->frontendAjaxClass();
	}

	/**
	 * AwesomeScripts
	 * Load library object script.
	 *
	 * @return void
	 */
	protected function AwesomeScripts() {
		require_once 'inc/AwesomeScripts.php';
		new AwesomeScripts;
	}

	public function pageTemplateInit()
    {
        require_once get_template_directory() . '/inc/params/template/PageTemplateInit.php';
        return PageTemplateInit::getInstance();
    }

    /**
     * Include file Function handle
     * @return void
     */
    public function includeFunction(){
        require_once get_template_directory() . '/inc/Helpers/HelpersFunction.php';
        return HelpersFunction::getInstance();
    }

    public function frontendAjaxClass() {
        require_once get_template_directory() . '/inc/Ajax/FrontendAjax.php';
        new FrontendAjax();
    }
}

function AwesomeTheme() {
	return AwesomeTheme::getInstance();
}


$GLOBALS['gmotheme'] = AwesomeTheme();

require_once( 'inc/Classes/CustomPrimaryMenuWalker.php' );
include 'inc/AfterSetupTheme.php';

ini_set('output_buffering', 'on'); // turns on output_buffering
function remove_meta_generators($html) {
    $pattern = '/<meta name(.*)=(.*)"generator"(.*)>/i';
    $html = preg_replace($pattern, '', $html);
    return $html;
}
function clean_meta_generators($html) {
    ob_start('remove_meta_generators');
}
add_action('get_header', 'clean_meta_generators', 100);
add_action('wp_footer', function(){ ob_end_flush(); }, 100);

function remove_core_updates(){
	global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

// function add_site_favicon() {
//     echo '<link rel="shortcut icon"
// href="' . get_stylesheet_directory_uri() . '/images/favicon.ico" />';
// }
// add_action('admin_head', 'add_site_favicon');