<?php
/**
 * Created by PhpStorm.
 * User: Brandon Vien Huynh
 * Date: 11/17/2017
 * Time: 10:54 AM
 */


// woo theme support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
