<?php

namespace Hasan\SpecialAddonsForElementor\App\AddCategory;
if (!defined('ABSPATH')) {
    exit;
}

class AddCategory
{
    public function register()
    {

        add_action('elementor/elements/categories_registered', [$this, 'add_elementor_widget_categories'], 0, 1);
    }

    function add_elementor_widget_categories($elements_manager)
    {

        $elements_manager->add_category(
            'special_addons',
            [
                'title' => esc_html__('Special Addons', SAFE_TEXT_DOMAIN),
                'icon' => 'fa fa-plug',
            ]
        );
        // $elements_manager->add_category(
        // 	'second-category',
        // 	[
        // 		'title' => esc_html__( 'Second Category', 'textdomain' ),
        // 		'icon' => 'fa fa-plug',
        // 	]
        // );

    }
}