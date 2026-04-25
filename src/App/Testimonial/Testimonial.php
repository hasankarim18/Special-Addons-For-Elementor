<?php

namespace Hasan\SpecialAddonsForElementor\App\Testimonial;
use Hasan\SpecialAddonsForElementor\App\Testimonial\TabContentControls;

use Elementor\Widget_Base;


if (!defined('ABSPATH')) {
    exit;
}




class Testimonial extends Widget_Base
{

    public function get_name(): string
    {
        return 'sa_fe_testimonial';
    }

    public function get_title(): string
    {
        return esc_html__('Testimonial', SAFE_TEXT_DOMAIN);

    }

    public function get_icon(): string
    {
        return 'eicon-flexbox';
    }

    // conditional style enqueue
    public function get_style_depends(): array
    {
        return ['sa_fe_testimonial_css'];
    }

    public function get_categories(): array
    {
        return ['special_addons'];
    }

    public function get_keywords(): array
    {
        return ['testimonial', 'special', 'ic'];
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

        ?>
        <section class="sa_fe_testimonial-section">
            <div class="sa_fe_container">

                <?php
                if ($settings['testimonial_lists']):
                    foreach ($settings['testimonial_lists'] as $item) {
                        ?>
                        <div class="sa_fe_testimonial-card">
                            <?php
                            echo '<img src="' . $item['client_image']['url'] . '">';
                            ?>
                            <!-- <img src="https://i.pravatar.cc/100?img=1" alt="Client"> -->
                            <h3 class="sa_fe_name"><?php echo esc_html($item['client_name']); ?></h3>
                            <p class="sa_fe_designation"><?php echo esc_html($item['client_desicgation']); ?></p>
                            <p class="sa_fe_testimonial">
                                <?php echo esc_textarea($item['clients_view']); ?>
                            </p>
                        </div>
                        <?php
                    }
                endif;
                ?>


            </div>
        </section>
        <?php
    }

}
