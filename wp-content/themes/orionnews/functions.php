<?php
    //Theme support

    function orionnews_theme_support(){
        //Nav Menus
        register_nav_menus( array(
            'primary' => __('Primary menu')
        ));
    }

    add_action('after_setup_theme', 'orionnews_theme_support');
?>