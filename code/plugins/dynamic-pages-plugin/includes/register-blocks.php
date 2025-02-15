<?php
// Register a custom Gutenberg block
function register_dynamic_gutenberg_blocks() {
    // Register the block script
    wp_register_script(
        'dynamic-block-script',
        plugins_url('../blocks/block.js', __FILE__),
        array('wp-blocks', 'wp-element', 'wp-editor'),
        filemtime(plugin_dir_path(__FILE__) . '../blocks/block.js')
    );

    // Register the block type
    register_block_type('dynamic-pages/cta-block', array(
        'editor_script' => 'dynamic-block-script',
    ));
}
add_action('init', 'register_dynamic_gutenberg_blocks');
