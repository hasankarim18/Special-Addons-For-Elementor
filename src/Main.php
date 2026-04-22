<?php

namespace Hasan\SpecialAddonsForElementor;

use Hasan\SpecialAddonsForElementor\App\AddCategory\AddCategory;
use Hasan\SpecialAddonsForElementor\App\BasicWidget\BasicWidget;
use Hasan\SpecialAddonsForElementor\App\LoadAssets\LoadAssets as AppLoadAssets;
use Hasan\SpecialAddonsForElementor\App\Singleton\Singleton;
use Hasan\SpecialAddonsForElementor\App\LoadAssets\LoadAssets;


if (!defined('ABSPATH')) {
    exit;
}



class Main
{
    use Singleton;

    public function init()
    {
        add_action('plugins_loaded', [$this, 'plugins_loaded']);
    }


    function plugins_loaded()
    {

        add_action('init', [$this, 'elementor_widget_init']);
        // 
        $add_category = new AddCategory();
        $add_category->register();
        // load assets
        $load_assets = new LoadAssets();
        $load_assets->register();


    }

    public function elementor_widget_init()
    {
        add_action('elementor/widgets/register', [$this, 'register_new_widgets']);
    }

    public function register_new_widgets($widgets_manager)
    {
        //var_dump("000000000000000000000000000000000000000000000000000000000000000000");


        $widgets_manager->register(new BasicWidget());
    }
}