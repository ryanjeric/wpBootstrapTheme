<?php
    // REGISTER NAV WALKER class
    require_once('class-wp-bootstrap-navwalker.php');

    // THEME SUPPORT
    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');
        // Nav menus
        register_nav_menus(array(
            'primary' => _('Primary Menu')
        ));

        // Post Formats
        add_theme_support('post-formats',['aside','gallery']);
    }

    add_action('after_setup_theme','wpb_theme_setup');

    /*  EXCERPT LENGTH CONTROL */
    function set_excerpt_length(){
        return 20;
    }

    add_filter('excerpt_length','set_excerpt_length');

    /*  WIDGETS LOCATION */

    function wpb_init_widgets($id){
        register_sidebar([
            'name'=> 'Sidebar',
            'id'  => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ]);
        register_sidebar([
            'name'=> 'Box1',
            'id'  => 'box1',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ]);
        register_sidebar([
            'name'=> 'Box2',
            'id'  => 'box2',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ]);
        register_sidebar([
            'name'=> 'Box3',
            'id'  => 'box3',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ]);
    }

    add_action('widgets_init','wpb_init_widgets');


    // Customize File
    require get_template_directory().'/inc/customizer.php';

