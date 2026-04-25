<?php

namespace Hasan\SpecialAddonsForElementor\App\SwiperSliderCollections\PaginationFraction;
if (!defined('ABSPATH')) {
    exit;
}

trait TabContentControls
{
    protected function register_content_control()
    {
        $this->start_controls_section(
            'slider_settings',
            [
                'label' => esc_html__('Slider Settings', SAFE_TEXT_DOMAIN),
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

        $this->add_control(
            'slides_per_view',
            [
                'label' => esc_html__('Slides per view', SAFE_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 6,
                'step' => 1,
                'default' => 1,
                'frontend_available' => true,
            ]
        );

        $this->add_control(
            'autoplay',
            [
                'label' => esc_html__('Autoplay', SAFE_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('On', SAFE_TEXT_DOMAIN),
                'label_off' => esc_html__('Off', SAFE_TEXT_DOMAIN),
                'return_value' => 'yes',
                'default' => 'yes',
                'frontend_available' => true,
            ]
        );


        // Text input control

        $this->add_control(
            'pf_title',
            [
                'label' => esc_html__('Title', SAFE_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Pagination fraction', SAFE_TEXT_DOMAIN),
                // 'placeholder' => esc_html__('Type your title here', SAFE_TEXT_DOMAIN),
            ]
        );


        $this->end_controls_section();

        // Add slides

        $this->start_controls_section(
            'add_slides',
            [
                'label' => esc_html__('Add Slides', SAFE_TEXT_DOMAIN),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'slide_title',
            [
                'label' => esc_html__('Title', SAFE_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Slide Title', SAFE_TEXT_DOMAIN),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'slide_content',
            [
                'label' => esc_html__('Content', SAFE_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Slide content here', SAFE_TEXT_DOMAIN),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $repeater->add_control(
            'slide_image',
            [
                'label' => esc_html__('Choose Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'link_title',
            [
                'label' => esc_html__('Link text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Learn more', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'slide_link',
            [
                'label' => esc_html__('Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );


        $this->add_control(
            'slides',
            [
                'label' => esc_html__('Add slides', SAFE_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'slide_title' => esc_html__('Title #1', 'textdomain'),
                        'slide_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
                        'link_title' => "Learn more."
                    ],
                    [
                        'slide_title' => esc_html__('Title #2', 'textdomain'),
                        'slide_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
                        'link_title' => "Learn more."
                    ],
                ],
                'title_field' => '{{{ slide_title }}}',
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );




        $this->end_controls_section();
    }
}