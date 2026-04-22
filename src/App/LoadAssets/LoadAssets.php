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
    }

    // step 1.a
    public function safe_register_frontend_scripts()
    {
        wp_register_script(
            'basic-widget-script',
            SAFE_URL . 'assets/js/basic-widget-script.js'
        );
    }


    // step 2.a
    public function safe_enqueue_frontend_scripts()
    {
        wp_enqueue_script('basic-widget-script');
    }

}