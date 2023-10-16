<?php

/*
 * This code adds a Call to Action (CTA) section after each blog post.
 * You can customize the CTA's title, description, and button text to promote your content or actions.
 */

// Add CTA After Blog Post
function add_cta_after_post( $content ) {
    if ( 'post' === get_post_type() ) {
        $url_cta = home_url('/your-custom-url/'); 
        
        $content .= '<div class="cta-container">
        <h2>Your Custom CTA Title</h2>
        <p>Your custom CTA description. <a href="' . esc_url($url_cta) . '" target="_blank">Learn more</a>.</p>
        <p><a class="cta-button" href="' . esc_url($url_cta) . '" target="_blank">CUSTOMIZE YOUR CTA</a></p>
        </div>';
        
        $content .= '
        <style>
        .cta-container {
            text-align: center;
            margin: 20px auto 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            clear: both;
        }
        
        .cta-container h2 {
            margin-bottom: 10px;
        }
        
        .cta-container p {
            text-align: center !important;
        }
        
        .cta-container .cta-button {
            display: inline-block;
            background-color: #fd9301;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }
        
        .cta-container .cta-button:hover {
            background-color: #0c3183 !important;
        }
        </style>';
    }
    return $content;
}
add_filter( 'the_content', 'add_cta_after_post' );
