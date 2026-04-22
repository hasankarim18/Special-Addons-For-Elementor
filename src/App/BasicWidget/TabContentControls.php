<?php

namespace Hasan\SpecialAddonsForElementor\App\BasicWidget;

trait TabContentControls
{
    protected function register_content_control()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Text', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Heading control
        $this->add_control(
            'more_options',
            [
                'label' => esc_html__('Options', SAFE_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        // Text input control

        $this->add_control(
            'widget_title',
            [
                'label' => esc_html__('Title', SAFE_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Default title', SAFE_TEXT_DOMAIN),
                'placeholder' => esc_html__('Type your title here', SAFE_TEXT_DOMAIN),
            ]
        );


        $this->end_controls_section();
    }
}