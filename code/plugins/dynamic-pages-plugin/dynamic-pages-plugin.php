<?php
/*
Plugin Name: Dynamic Pages Plugin
Plugin URI: https://example.com
Description: A custom plugin to manage dynamic Gutenberg blocks and templates.
Version: 1.0
Author: Your Name
Author URI: https://yourwebsite.com
*/

// Security check
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Include block registration
include_once plugin_dir_path(__FILE__) . 'includes/register-blocks.php';
