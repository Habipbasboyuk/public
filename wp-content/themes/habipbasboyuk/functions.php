<?php

function habip_portfolio_scripts() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'habip_portfolio_scripts');