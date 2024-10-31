<?php
use Elementor\Widget_Base;

class Sw_Wine_Searcher_Elementor_Widget extends Widget_Base {
    public function get_name() {
        return 'wine-searcher-widget';
    }

    public function get_title() {
        return __( 'Wine-Searcher', 'wine-searcher-block' );
    }

    public function get_icon() {
        return 'eicon-search-results';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_content',
            [
                'label' => __( 'Content', 'wine-searcher-block' ),
            ]
        );
    
        $this->add_control(
            'blank_option',
            [
                'label' => __( 'Blank option', 'wine-searcher-block' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'On', 'wine-searcher-block' ),
                'label_off' => __( 'Off', 'wine-searcher-block' ),
                'default' => 'no', 
            ]
        );
        $this->add_control(
            'enable_vintage',
            [
                'label' => __( 'Enable Vintage', 'wine-searcher-block' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'On', 'wine-searcher-block' ),
                'label_off' => __( 'Off', 'wine-searcher-block' ),
                'default' => 'yes', 
            ]
        );
    
        $this->end_controls_section();
    }
      
    protected function render() {
        include( plugin_dir_path( __FILE__ ) . '../template/searcher.php' );
    }
}
