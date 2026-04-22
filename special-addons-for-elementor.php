<?php


/*
 * Plugin Name:       Special Addons For Elementor 
 * Plugin URI:        
 * Description:       Show the reading time of each post
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Hasan
 * Author URI:        https://author.hasan.com/
 * License:           GPL v2 or later
 * License URI:       
 *
 * Text Domain:        special-addons-for-elementor
 * Domain Path:       /languages
 * 
 */

use Hasan\SpecialAddonsForElementor\Main;

define('SAFE_TEXT_DOMAIN', 'special-addons-for-elementor');
define('SAFE_URL', plugin_dir_url(__FILE__));


if (!class_exists(Main::class) && is_readable(__DIR__) . './vendor/autoload.php') {
    require_once __DIR__ . '/vendor/autoload.php';
}




class_exists(Main::class) && Main::instance()->init();