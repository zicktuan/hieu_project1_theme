<?php

/**
 * 
 */
class AwesomeScripts
{

	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'frontendScripts'));
		add_action('wp_enqueue_scripts', array($this, 'frontendStyles'));
	}

	public function frontendScripts()
	{
		global $gmotheme;

		wp_enqueue_script('modernizr.custom', get_template_directory_uri() . '/assets/plugins/modernizr.custom.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('jquery-1.11.1', get_template_directory_uri() . '/assets/plugins/jquery/jquery-1.11.1.min.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('bootstrap-select', get_template_directory_uri() . '/assets/plugins/bootstrap-select/js/bootstrap-select.min.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('superfish.min', get_template_directory_uri() . '/assets/plugins/superfish/js/superfish.min.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('prettyPhoto', get_template_directory_uri() . '/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/plugins/owl-carousel2/owl.carousel.min.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('jquery.sticky', get_template_directory_uri() . '/assets/plugins/jquery.sticky.min.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('easing', get_template_directory_uri() . '/assets/plugins/jquery.easing.min.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/assets/plugins/jquery.smoothscroll.min.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('smooth-scrollbar', get_template_directory_uri() . '/assets/plugins/smooth-scrollbar.min.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), $gmotheme->version, true);
		wp_enqueue_script('jquery.cookie', get_template_directory_uri() . '/assets/plugins/jquery.cookie.js', array('jquery'), $gmotheme->version, true);
		// wp_enqueue_script('theme-config', get_template_directory_uri() . '/assets/js/theme-config.js', array('jquery'), $gmotheme->version, true);

        // wp_localize_script('common-js', 'gmo_admin',
        //     ['url' => admin_url(),]
        // );
	}

	public function frontendStyles()
	{
		global $gmotheme;
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css', $gmotheme->version, true);
        wp_enqueue_style('bootstrap-select', get_template_directory_uri() . '/assets/plugins/bootstrap-select/css/bootstrap-select.min.css', $gmotheme->version, true);
		wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/assets/plugins/fontawesome/css/font-awesome.min.css', $gmotheme->version, true);
		wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/assets/plugins/prettyphoto/css/prettyPhoto.css', $gmotheme->version, true);
		wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/plugins/owl-carousel2/assets/owl.carousel.min.css', $gmotheme->version, true);
		wp_enqueue_style('owl.theme', get_template_directory_uri() . '/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css', $gmotheme->version, true);
        wp_enqueue_style('animate', get_template_directory_uri() . '/assets/plugins/animate/animate.min.css', $gmotheme->version, true);
        wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css', $gmotheme->version, true);
        wp_enqueue_style('theme-green', get_template_directory_uri() . '/assets/css/theme-green-1.css', $gmotheme->version, true);

	}

}