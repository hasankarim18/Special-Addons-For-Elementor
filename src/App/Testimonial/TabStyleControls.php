<?php

namespace Hasan\SpecialAddonsForElementor\App\Testimonial;

if (!defined('ABSPATH')) {
    exit;
}


trait TabStyleControls
{
    protected function register_style_controls()
    {
        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__('Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->end_controls_section();
    }
}
