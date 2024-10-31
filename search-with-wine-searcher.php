<?php
   /*
   Plugin Name: Search with Wine-Searcher
   Description: A plugin to integrate wine search into your WordPress site using Wine-Searcher.
   Version: 1.7
   Author: Matteo Enna
   Author URI: https://matteoenna.it/it/wordpress-work/
   Text Domain: search-with-wine-searcher
   License: GPL2
   */

    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }
   
    require_once (dirname(__FILE__).'/search_with_wine_searcher_notice_Class.php');
    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    if ( is_plugin_active( 'elementor/elementor.php' ) ) {
        add_action( 'elementor/widgets/widgets_registered', 'wine_searcher_widgets' );
    }

    add_shortcode( 'wine_searcher', 'wine_searcher_shortcode' );
    $notice = new searchWithWineSearcher_notice_Class();

    function wine_searcher_widgets() {
        require_once( plugin_dir_path( __FILE__ ) . 'widgets/elementor-wine-searcher-widget.php' );

        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Sw_Wine_Searcher_Elementor_Widget() );
    }

    function wine_searcher_shortcode( $atts ) {
        $atts = shortcode_atts(
            array(
                'blank_option' => 'no',
                'enable_vintage' => 'yes',
            ),
            $atts,
            'wine_searcher'
        );
    
        $blank_option = $atts['blank_option'];
        $enable_vintage = $atts['enable_vintage'];
    
        ob_start();
        include( plugin_dir_path( __FILE__ ) . 'template/searcher.php' );
        return ob_get_clean();
    }
