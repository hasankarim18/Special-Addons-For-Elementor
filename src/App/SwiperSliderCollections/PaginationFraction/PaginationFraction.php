<?php

namespace Hasan\SpecialAddonsForElementor\App\SwiperSliderCollections\PaginationFraction;
use Hasan\SpecialAddonsForElementor\App\SwiperSliderCollections\PaginationFraction\TabContentControls;
use Hasan\SpecialAddonsForElementor\App\SwiperSliderCollections\PaginationFraction\TabStyleControls;
use Elementor\Widget_Base;
if (!defined('ABSPATH')) {
    exit;
}

class PaginationFraction extends Widget_Base
{

    public function get_name(): string
    {
        return 'safe_pagination_fraction';
    }

    public function get_title(): string
    {
        return esc_html__('Pagination Fraction', SAFE_TEXT_DOMAIN);

    }

    public function get_script_depends()
    {
        return ['swiper', 'jquery', 'safe_swiper_slider_script'];
    }
    public function get_style_depends()
    {
        return ['swiper', 'safe_pagination_fraction_style'];
    }

    public function get_icon(): string
    {
        return 'eicon-code';
    }

    public function get_categories(): array
    {
        return ['special_addons'];
    }

    public function get_keywords(): array
    {
        return ['slider', 'pagination_fraction', 'pf'];
    }

    use TabContentControls;
    use TabStyleControls;
    protected function register_controls()
    {
        $this->register_content_control();
        $this->register_style_controls();
    }

    protected function render(): void
    {
        $settings = $this->get_settings_for_display();


        //   $settings = $this->get_settings_for_display();

        ?>
        <div class="safe_swiper_pagination_fraction">
            <h2>
                <?php echo esc_html($settings['pf_title'] ?? "") ?>
            </h2>
            <div class="swiper safe_pagination_fraction">
                <div class="swiper-wrapper">
                    <?php
                    if ($settings['slides']) {
                        foreach ($settings['slides'] as $slide) {
                            ?>
                            <div class="swiper-slide">
                                <?php
                                //   $image_url = $slide['slide_image'] ?? "";
                                $image_url = $slide['slide_image']['url'];
                                ?>
                                <div class="safe_swiper_slide_inner"
                                    style="background-image: url('<?php echo esc_url($image_url); ?>');">

                                    <div class="safe_slide_overlay"></div>

                                    <div class="safe_slide_content">
                                        <h3 class="safe_slide_title">
                                            <?php echo esc_html($slide['slide_title'] ?? 'Slide Title'); ?>
                                        </h3>

                                        <p class="safe_slide_desc">
                                            <?php echo esc_html($slide['slide_content'] ?? 'Slide description goes here.'); ?>
                                        </p>

                                        <?php
                                        if (!empty($slide['slide_link']['url'])) {
                                            $this->add_link_attributes('slide_link', $slide['slide_link']);
                                        }
                                        ?>

                                        <a <?php $this->print_render_attribute_string('slide_link'); ?> class="safe_slide_btn">
                                            <?php
                                            echo esc_html($slide['link_title']);
                                            ?>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <?php
    }
}