<?php
/**
 * Plugin Name:       Editor Script Test
 * Description:       Block to test whether the editor script dependencies load in the post editor and site editor
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       editor-script-test
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_editor_script_test_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_editor_script_test_block_init' );

/**
 * Enqueue the imagesloaded script.
 */
function enqueue_imagesloaded_script() {
	wp_enqueue_script( 'imagesloaded', 'https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.js', array(), '5.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_imagesloaded_script' );
