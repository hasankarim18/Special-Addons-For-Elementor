<?php

namespace Hasan\SpecialAddonsForElementor\App\Testimonial;

trait TabContentControls
{
    protected function register_content_control()
    {
        $this->start_controls_section(
            'safe_testimonial_content_section',
            [
                'label' => esc_html__('Testimonial', SAFE_TEXT_DOMAIN),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'client_image',
            [
                'label' => esc_html__('Choose Image', SAFE_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'client_name',
            [
                'label' => esc_html__('Client name', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Jhon doe', 'textdomain'),
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );

        $repeater->add_control(
            'client_desicgation',
            [
                'label' => esc_html__('Client Designation', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Designation', 'textdomain'),
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'clients_view',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Clients View', SAFE_TEXT_DOMAIN),
                'placeholder' => esc_html__('Type your description here', 'textdomain'),
            ]
        );

        $this->add_control(
            'testimonial_lists',
            [
                'label' => esc_html__('Testimonial', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'client_name' => esc_html__('Jhon Doe', SAFE_TEXT_DOMAIN),
                        'client_desicgation' => esc_html__('DELTA FORCE', SAFE_TEXT_DOMAIN),
                        'clients_view' => '"This service completely exceeded my expectations. The quality and support were outstanding!"'
                    ],
                    [
                        'client_name' => esc_html__("GI JANE", SAFE_TEXT_DOMAIN),
                        'client_desicgation' => esc_html__('Marine Core', SAFE_TEXT_DOMAIN),
                        'clients_view' => '"This service completely exceeded my expectations. The quality and support were outstanding!"'
                    ],
                    [
                        'client_name' => esc_html__("GI JOE", SAFE_TEXT_DOMAIN),
                        'client_desicgation' => esc_html__('Rangers', SAFE_TEXT_DOMAIN),
                        'clients_view' => '"This service completely exceeded my expectations. The quality and support were outstanding!"'
                    ],

                ],
                'title_field' => '{{{ client_name }}}',
            ]
        );






        $this->end_controls_section();
    }
}