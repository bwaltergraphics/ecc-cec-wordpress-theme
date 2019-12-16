<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <?php wp_enqueue_style( 'style', get_stylesheet_uri() );
            wp_head();
        ?>
        <title><?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Solway:400,700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <script>
            $(document).ready(function(){
                $("button").click(function(){
                    
                    if($("button").text() == "☰"){
                    $("button").text("🞬");
                    }else{
                        $("button").text("☰");
                    }
                     $("li").toggle("slow");
                    });
                });
        </script>
            
    </head>

    <body <?php body_class(); ?>>
        <div class="container">

                <!--site header-->

                <header class="site-header">
                    <!-- why won't this pull styling???? ** fixed **-->
                <div class="nav-button" ><button> 🞬 </button></div>
                <nav class="site-nav desktop-menu">
                        <?php
                        $args = array(
                            'theme_location' => 'primary'
                        );

                        ?>


                        <?php wp_nav_menu( $args );
                        /* The below code checks if a mobile-menu is set from the backend in the menu settings. If a menu has been set it will be displayed in the header. Or else, a menu has not been set then display a message.*/
                        ?>
                        
                    </nav>
                    <nav><?php
                    if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
                            wp_nav_menu( array(
                            'depth' => 6,
                            'sort_column' => 'menu_order',
                            'container' => 'ul',
                            'menu_id' => 'main-nav',
                            'menu_class' => 'nav mobile-menu',
                            'theme_location' => 'mobile-menu'
                            ) );
                            } else {
                            echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
                        } ?>
                    </nav>
                <div class="header-logo">
                       <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                     <a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
                    <h1><?php bloginfo('name'); ?></h1>
                    <hr class="title-break-line" />
                    <div class="header-desc"><h3><?php bloginfo('description'); ?></h3><div>

                    

                </header><!--/site-header-->
        
    


    