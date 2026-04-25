<?php
namespace Hasan\SpecialAddonsForElementor\App\SwiperSliderCollections;
use Hasan\SpecialAddonsForElementor\App\SwiperSliderCollections\PaginationFraction\PaginationFraction;

if (!defined('ABSPATH')) {
    exit;
}


class SwiperSliderCollections
{
    public function register()
    {

        $this->load_assets();

        add_action('elementor/widgets/register', [$this, 'register_new_swiper_slider']);


    }

    public function register_new_swiper_slider($widgets_manager)
    {
        $widgets_manager->register(new PaginationFraction());

    }


    public function load_assets()
    {
        // #register style
        wp_register_style(
            'safe_pagination_fraction_style',
            SAFE_URL . 'assets/css/safe_pagination_fraction_style.css'
        );
        // 

        wp_register_script(
            'safe_swiper_slider_script',
            SAFE_URL . 'assets/js/swiper-slider.js',
            ['jquery', 'elementor-frontend', 'swiper'],
            '1.0',
            true
        );

    }

}