<?php

namespace Hasan\SpecialAddonsForElementor\App\BasicWidget;
use Hasan\SpecialAddonsForElementor\App\BasicWidget\TabContentControls;

use Elementor\Widget_Base;


if (!defined('ABSPATH')) {
    exit;
}




class BasicWidget extends Widget_Base
{

    public function get_name(): string
    {
        return 'basic_widget';
    }

    public function get_title(): string
    {
        return esc_html__('Basic widget', SAFE_TEXT_DOMAIN);

    }

    public function get_icon(): string
    {
        return 'eicon-code';
    }

    public function get_categories(): array
    {
        return ['basic'];
    }

    public function get_keywords(): array
    {
        return ['basic', 'special', 'ic'];
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

        if (empty($settings['widget_title'])) {
            # code...
            return;
        }

        ?>
        <div class="safe_basic_widget_title_box">
            <p class="safe_basic_widget_title">
                <?php
                echo $settings['widget_title'];
                ?>
            </p>
        </div>
        <?php
    }

}