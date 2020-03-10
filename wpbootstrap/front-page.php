<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description') ;?>">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/blog/">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        <?php wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?php wp_head(); ?>
    <style>
        .showcase{
            background:url(<?php echo get_theme_mod('showcase_image',get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Optional website name / brand / logo -->
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            <!--/.navbar-header-->

            <?php
            // WP Bootstrap Navwalker
            // https://github.com/wp-bootstrap/wp-bootstrap-navwalker
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
        </div>
        <!--/.container-fluid -->
    </nav>
    <!--/.navbar-->

    <section class="showcase">
        <div class="container">
            <h1><?php echo get_theme_mod('showcase_heading','Custom Bootstrap Wordpress Theme') ?></h1>
            <p><?php echo get_theme_mod('showcase_text','Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius facere sed, velit quas sunt eveniet est
                error doloremque molestiae quisquam aliquid quidem, corporis quia minus commodi sint adipisci, totam
                magni.') ?></p>
            <a href="<?php echo get_theme_mod('btn_url','#') ?>" class="btn btn-primary btn-lg">
            <?php echo get_theme_mod('btn_text','Get Started') ?>
            </a>
        </div>
    </section>

    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box1')): ?>
                    <?php dynamic_sidebar('box1') ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box2')): ?>
                    <?php dynamic_sidebar('box2') ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box3')): ?>
                    <?php dynamic_sidebar('box3') ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="blog-footer">
        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

    <?php wp_footer(); ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
</body>

</html>