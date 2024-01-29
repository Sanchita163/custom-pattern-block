<?php
/**
 * Plugin Name: Custom Banner Pattern
 * Plugin URI: https://yourwebsite.com
 * Description: Adds a custom banner block pattern to the WordPress editor.
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://yourwebsite.com
 */

function custom_banner_pattern_register_block_pattern() {
    if ( function_exists( 'register_block_pattern' ) ) {

        $pattern_content = <<<CONTENT
        <!-- wp:cover {"customOverlayColor":"#ffffff","minHeight":400,"minHeightUnit":"px","align":"full","url":"http://localhost/DA/wp-content/uploads/2024/01/Untitled-design-1.png"} -->
        <div class="wp-block-cover alignfull has-background-dim" style="min-height:400px;background-image:url(http://localhost/DA/wp-content/uploads/2024/01/Untitled-design-1.png);background-color:#ffffff;">
            <div class="wp-block-cover__inner-container">
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"50%"} -->
                    <div class="wp-block-column" style="flex-basis:50%">
                        <!-- wp:heading {"level":1} -->
                        <h1>Managing Diabetes in older people</h1>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>Diabetes care Age Care is your go-to guide for information and tools to help you manage diabetes on your own. Live with confidence and support.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"#ff0000","textColor":"#ffffff"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-white-color has-red-background-color">Learn more about care</a></div>
                            <!-- /wp:button -->
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Read patient stories</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                        <!-- wp:paragraph -->
                        <p>Share</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column {"width":"50%"} -->
                    <div class="wp-block-column" style="flex-basis:50%">
                        <!-- wp:image {"align":"center","id":10,"width":100,"height":500px,"sizeSlug":"full","linkDestination":"none"} -->
                        <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="http://localhost/DA/wp-content/uploads/2024/01/Untitled-design-1.png" alt="" width="100" height="100"/></figure></div>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
        </div>
        <!-- /wp:cover -->
CONTENT;

        register_block_pattern(
            'custom-banner-pattern/banner',
            array(
                'title'       => __( 'Custom Banner', 'custom-banner-pattern' ),
                'description' => _x( 'A full-width banner with text on the left and an editable image on the right.', 'Block pattern description', 'custom-banner-pattern' ),
                'content'     => $pattern_content,
            )
        );
    }
}
add_action( 'init', 'custom_banner_pattern_register_block_pattern' );
