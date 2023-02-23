<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="https://kit.fontawesome.com/20ff68d117.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Lobster&family=Montserrat&display=swap&family=Italianno&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open( ); ?>
    <div id="wrapper">
        <header>
            <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name' ); ?>">
            <!-- <div id="logo">
                <?php $image = get_header_image( ); ?>
                <?php if(!empty($image)): ?>
                    <img 
                        src="<?php echo esc_url($image); ?>"
                        height="<?php echo get_custom_header( )->height; ?>"
                        width="<?php echo get_custom_header( )->width; ?>" 
                        alt="logo">
                <?php else : ?>
                    <img 
                        src="<?php echo get_theme_support('custom-header','default-image' ); ?>"
                        alt="logo">
                <?php endif; ?>
            </div> -->
            <?php if(display_header_text()): ?>
            <div id="titre">
                    <h1 class="site-title"> <?php bloginfo('name' ); ?></h1>
                    <h2 class="site-description"><?php bloginfo('description' )?></h2>
            </div>
            <?php endif; ?>
            </a>
        </header>
        
        <nav id="menuPrincipal">
            <a id="burger" href="#"><img id="icone" src="
                <?php 
                    $icone = get_theme_mod('icone') ;
                    $icone_url = wp_get_attachment_url( $icone );
                    if($icone!=''):
                        echo $icone_url;
                    else:
                        echo get_template_directory_uri().'/images/icone.ico';
                    endif;?>
                "></img></a>
            <?php
                wp_nav_menu(array(
                    'sort_column'=> 'menu-order',
                    'theme_location' => 'principal'
                ));
            ?>
        </nav>
        <?php 
            if (is_front_page(  )):
                $slide1 = get_theme_mod('slide1') ;
                $slide1_url = wp_get_attachment_url( $slide1 );
                $slide1_text = get_theme_mod('slide1_text') ;
                $slide1_link = get_theme_mod('slide1_link') ;
                $slide2 = get_theme_mod('slide2');
                $slide2_url = wp_get_attachment_url( $slide2 );
                $slide2_text = get_theme_mod('slide2_text') ;
                $slide2_link = get_theme_mod('slide2_link') ;
                $slide3 = get_theme_mod('slide3');
                $slide3_url = wp_get_attachment_url( $slide3 );
                $slide3_text = get_theme_mod('slide3_text') ;
                $slide3_link = get_theme_mod('slide3_link') ;
                $slide4 = get_theme_mod('slide4');
                $slide4_url = wp_get_attachment_url( $slide4 );
                $slide4_text = get_theme_mod('slide4_text') ;
                $slide4_link = get_theme_mod('slide4_link') ;
                $slide5 = get_theme_mod('slide5');
                $slide5_url = wp_get_attachment_url( $slide5 );
                $slide5_text = get_theme_mod('slide5_text') ;
                $slide5_link = get_theme_mod('slide5_link') ;

                if($slide1!='') : 
                ?>
                
                    <div class="bxslider">
                        <div>
                        <img src="<?php echo $slide1_url ?>" class="slide_img">
                            <?php if($slide1_text!=''): ?>
                                <a class="slide_span" href="<?php echo $slide1_link ?>"><?php echo $slide1_text ?></a>
                            <?php endif; ?>  
                        </div>
                        <?php if($slide2!='') :?>
                        <div>
                            <?php if($slide2_text!=''): ?>
                            <a class="slide_span" href="<?php echo $slide2_link ?>"><?php echo $slide2_text ?></a>
                            <?php endif; ?>
                            <img src="<?php echo $slide2_url ?>" class="slide_img">
                        </div>
                        <?php if($slide3!='') :?>
                        <div>
                            <img src="<?php echo $slide3_url ?>" class="slide_img">
                            <?php if($slide3_text!=''): ?>
                            <a class="slide_span" href="<?php echo $slide3_link ?>"><?php echo $slide3_text ?></a>
                            <?php endif; ?>
                        </div>
                        <?php if($slide4!='') :?>
                        <div>
                            <img src="<?php echo $slide4_url ?>" class="slide_img">
                            <?php if($slide4_text!=''): ?>
                            <a class="slide_span" href="<?php echo $slide4_link ?>"><?php echo $slide4_text ?></a>
                            <?php endif; ?> 
                        </div>                           
                        <?php if($slide5!='') :?>
                        <div>
                            <img src="<?php echo $slide5_url ?>" class="slide_img">
                            <?php if($slide5_text!=''): ?>
                            <a class="slide_span" href="<?php echo $slide5_link ?>" target="_blank"><?php echo $slide5_text ?></a>
                            <?php endif; ?>                            
                        </div>
                        <?php endif; endif; endif;
                        endif; ?>
                    </div>
                    <?php endif; ?>
                <?php endif;?> 
        <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    
