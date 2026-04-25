<?php
namespace Hasan\SpecialAddonsForElementor\App\LoadAssets;

use Hasan\SpecialAddonsForElementor\App\Singleton\Singleton;
if (!defined('ABSPATH')) {
    exit;
}

class LoadAssets
{
    // use Singleton;
    public function register()
    {
        // #step 1- register 
        add_action('elementor/frontend/before_register_scripts', [$this, 'safe_register_frontend_scripts']);


        // #step 1 - enque
        add_action('elementor/frontend/before_enqueue_scripts', [$this, 'safe_enqueue_frontend_scripts']);


        // 3
        // register scripts -- contional (only register not enqueing)
        add_action('wp_enqueue_scripts', [$this, 'register_widget_styles']);
    }

    // step 1.a
    public function safe_register_frontend_scripts()
    {
        wp_register_script(
            'basic-widget-script',
            SAFE_URL . 'assets/js/basic-widget-script.js'
        );

        // 



    }


    // step 2.a
    public function safe_enqueue_frontend_scripts()
    {
        wp_enqueue_script('basic-widget-script');
    }

    // 3

    public function register_widget_styles()
    {
        wp_register_style('sa_fe_testimonial_css', SAFE_URL . 'assets/css/testimonial.css');
    }

}