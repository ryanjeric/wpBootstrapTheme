<?php 
function wpb_customize_register($wp_customize) {
    // Showcase Section
    $wp_customize->add_section('showcase',[
        'title' => __('Showcase','wpbootstrap'),
        'description' => sprintf(__('Options for showcase','wpbootstrap')),
        'priority' => 130
    ]);

    $wp_customize->add_setting('showcase_image',array(
        'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',[
        'label' => __('Showcase Image','wpbootstrap'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    ]));


    $wp_customize->add_setting('showcase_heading',array(
        'default' => _x('Custom Bootstrap Wordpress Theme','wpbootstrap'),
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading',[
        'label' => __('Heading','wpbootstrap'),
        'section' => 'showcase',
        'priority' => 2
    ]);

    $wp_customize->add_setting('showcase_text',array(
        'default' => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius facere sed, velit quas sunt eveniet est error doloremque molestiae quisquam aliquid quidem, corporis quia minus commodi sint adipisci, totam magni.','wpbootstrap'),
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text',[
        'label' => __('Text','wpbootstrap'),
        'section' => 'showcase',
        'priority' => 3
    ]);

    $wp_customize->add_setting('btn_url',array(
        'default' => _x('http://test.com','wpbootstrap'),
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url',[
        'label' => __('Button URL','wpbootstrap'),
        'section' => 'showcase',
        'priority' => 4
    ]);

    $wp_customize->add_setting('btn_text',array(
        'default' => _x('Read More','wpbootstrap'),
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text',[
        'label' => __('Button Text','wpbootstrap'),
        'section' => 'showcase',
        'priority' => 5
    ]);
}

add_action('customize_register','wpb_customize_register');