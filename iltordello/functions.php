<?php
// Activation option custom-header
    $header_args = array(
        'flex-height'=> true,
        'height'=> 400,
        'flex-width'=> true,
        'width'=> 500,
        'default-image'=> get_template_directory_uri().'/images/logo.png',
    );
    add_theme_support('custom-header',$header_args);

// Acti. opt. couleur arrière-plan
    add_theme_support('custom-background',array('default-color'=>'#E2E9C0'));

// Chargement feuille de style + script
    function iltordello_scripts(){
        wp_enqueue_style('iltordello-style',get_stylesheet_uri());
        wp_enqueue_script( 'iltordello-script', get_template_directory_uri(  ).'/script.js', array('jquery'));
    }
    add_action('wp_enqueue_scripts','iltordello_scripts' );

// Génération automatique <title>
    add_theme_support('title-tag' );

// Enregistrement menus
    if(function_exists('register_nav_menus')){
        register_nav_menus(array(
            'principal'=>'Menu principal',
            'footer'=>'Menu footer',
        ));
    }

// ajout options

function iltordello_customize_register($wp_customize) {
    $wp_customize->add_setting('text_color', array(
        'default'=> '#00000',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_color',array(
        'label'=> 'Couleur du texte',
        'section'=>'colors',
        'settings'=>'text_color'
    )));

    $wp_customize->add_setting('title_color', array(
        'default'=> '#9c4921',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'title_color',array(
        'label'=> 'Couleur des titres',
        'section'=>'colors',
        'settings'=>'title_color'
    )));

    $wp_customize->add_setting('button_color', array(
        'default'=> '#c89a26',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_color',array(
        'label'=> 'Couleur des boutons',
        'section'=>'colors',
        'settings'=>'button_color'
    )));

    $wp_customize->add_setting('footer_color', array(
        'default'=> '#9c4a21b7',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_color',array(
        'label'=> 'Couleur du footer et des blocs class = special',
        'section'=>'colors',
        'settings'=>'footer_color'
    )));

    $wp_customize->add_setting('text_footer', array(
        'default'=> '#fbf3ea',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_footer',array(
        'label'=> 'Couleur texte footer et .special',
        'section'=>'colors',
        'settings'=>'text_footer'
    )));

    $wp_customize->add_setting('button_footer', array(
        'default'=> '#56676b',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_footer',array(
        'label'=> 'Couleur des boutons footer et .special',
        'section'=>'colors',
        'settings'=>'button _footer'
    )));

    $wp_customize->add_section('my_footer', array(
        'title'=> 'Footer',
        'priority'=>120
    ));

    $wp_customize->add_setting('iltordello_credits', array(
        'default'=> 'oui',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'esc_attr'
    ));

    $wp_customize->add_control('iltordello_credits', array(
        'settings'=> 'iltordello_credits',
        'label'=>'Souhaitez-vous montrer le copyright ?',
        'section'=>'my_footer',
        'type'=>'radio',
        'choices' => array(
            'oui'=>'Oui',
            'non'=>'Non'
        )
    ));

    $wp_customize->add_setting('iltordello_phone', array(
        'default'=> '',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'esc_attr'
    ));

    $wp_customize->add_control('iltordello_phone', array(
        'settings'=> 'iltordello_phone',
        'label'=>'Téléphone',
        'section'=>'my_footer',
        'type'=>'phone'
    ));

    $wp_customize->add_setting('iltordello_adresse', array(
        'default'=> '',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('iltordello_adresse', array(
        'settings'=> 'iltordello_adresse',
        'label'=>'Adresse',
        'section'=>'my_footer',
        'type'=>'textarea'
    ));

    $wp_customize->add_setting('iltordello_facebook', array(
        'default'=> '',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('iltordello_facebook', array(
        'settings'=> 'iltordello_facebook',
        'label'=>'URL page Facebook',
        'section'=>'my_footer',
        'type'=>'url',
        'input_attrs' => array(
            'placeholder' => "https://example.com",
            'pattern'=>"https://.*"
          )        
    ));

    $wp_customize->add_setting('iltordello_insta', array(
        'default'=> '',
        'capability'=>'edit_theme_options',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('iltordello_insta', array(
        'settings'=> 'iltordello_insta',
        'label'=>'URL page Instagram',
        'section'=>'my_footer',
        'type'=>'url',
        'input_attrs' => array(
            'placeholder' => "https://example.com",
            'pattern'=>"https://.*"
          )
    ));

    if (isset( $wp_customize->selective_refresh)){
        $wp_customize->selective_refresh->add_partial(
            'blogname', array('selector' => '.site-title')
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription', array('selector' => '.site-description')
        );
        $wp_customize->selective_refresh->add_partial(
            'header_image', array('selector' => '#logo')
        );
        $wp_customize->selective_refresh->add_partial(
            'iltordello_credits', array('selector' => '#copyright')
        );

        $wp_customize->selective_refresh->add_partial(
            'iltordello_phone', array('selector' => '#phone')
        );

        $wp_customize->selective_refresh->add_partial(
            'iltordello_adresse', array('selector' => '#adresse')
        );

        $wp_customize->selective_refresh->add_partial(
            'iltordello_facebook', array('selector' => '#facebook')
        );

        $wp_customize->selective_refresh->add_partial(
            'iltordello_insta', array('selector' => '#insta')
        );        
    }


    $wp_customize->add_section('slider', array(
        'title'=> 'Slider',
        'priority'=>100
    ));

    $wp_customize->add_setting('slide1', array(
        'default'=> '',
        'sanitize_callback'=>'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'slide1', array(
        'settings'=> 'slide1',
        'mime_type' => 'image',
        'label'=>'Slide 1',
        'section'=>'slider',
        'height'=>200, 
		'width'=>1500, 
		'flex_width'=>true, 
		'flex_height'=>true, 
    )));

    $wp_customize->add_setting('slide1_text', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('slide1_text', array(
        'settings'=> 'slide1_text',
        'type' => 'input',
        'label'=>'Texte Slide 1',
        'section'=>'slider'
    ));

    $wp_customize->add_setting('slide1_link', array(
        'default'=> '#',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));

    $wp_customize->add_control('slide1_link', array(
        'settings'=> 'slide1_link',
        'label'=>'Lien Slide 1',
        'section'=>'slider',
        'type'=>'url',
        'input_attrs' => array(
            'placeholder' => "https://example.com",
            'pattern'=>"https://.*"
          )
    ));

    $wp_customize->add_setting('slide2', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'slide2', array(
        'settings'=> 'slide2',
        'mime_type' => 'image',
        'label'=>'Slide 2',
        'section'=>'slider',
        'height'=>200, 
		'width'=>1500, 
		'flex_width'=>true, 
		'flex_height'=>true, 
    )));

    $wp_customize->add_setting('slide2_text', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('slide2_text', array(
        'settings'=> 'slide2_text',
        'type' => 'input',
        'label'=>'Texte Slide 2',
        'section'=>'slider'
    ));

    $wp_customize->add_setting('slide2_link', array(
        'default'=> '#',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('slide2_link', array(
        'settings'=> 'slide2_link',
        'label'=>'Lien Slide 2',
        'section'=>'slider',
        'type'=>'url',
        'input_attrs' => array(
            'placeholder' => "https://example.com",
            'pattern'=>"https://.*"
          )
    ));

    $wp_customize->add_setting('slide3', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'slide3', array(
        'settings'=> 'slide3',
        'mime_type' => 'image',
        'label'=>'Slide 3',
        'section'=>'slider',
        'height'=>200, 
		'width'=>1500, 
		'flex_width'=>true, 
		'flex_height'=>true, 
    )));

    $wp_customize->add_setting('slide3_text', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('slide3_text', array(
        'settings'=> 'slide3_text',
        'type' => 'input',
        'label'=>'Texte Slide 3',
        'section'=>'slider'
    ));

    $wp_customize->add_setting('slide3_link', array(
        'default'=> '#',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('slide3_link', array(
        'settings'=> 'slide3_link',
        'label'=>'Lien Slide 3',
        'section'=>'slider',
        'type'=>'url',
        'input_attrs' => array(
            'placeholder' => "https://example.com",
            'pattern'=>"https://.*"
          )
    ));

    $wp_customize->add_setting('slide4', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'slide4', array(
        'settings'=> 'slide4',
        'mime_type' => 'image',
        'label'=>'Slide 4',
        'section'=>'slider',
        'height'=>200, 
		'width'=>1500, 
		'flex_width'=>true, 
		'flex_height'=>true, 
    )));

    $wp_customize->add_setting('slide4_text', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('slide4_text', array(
        'settings'=> 'slide4_text',
        'type' => 'input',
        'label'=>'Texte Slide 4',
        'section'=>'slider'
    ));

    $wp_customize->add_setting('slide4_link', array(
        'default'=> '#',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('slide4_link', array(
        'settings'=> 'slide4_link',
        'label'=>'Lien Slide 4',
        'section'=>'slider',
        'type'=>'url',
        'input_attrs' => array(
            'placeholder' => "https://example.com",
            'pattern'=>"https://.*"
          )
    ));

    $wp_customize->add_setting('slide5', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'slide5', array(
        'settings'=> 'slide5',
        'mime_type' => 'image',
        'label'=>'Slide 5',
        'section'=>'slider',
        'height'=>200, 
		'width'=>1500, 
		'flex_width'=>true, 
		'flex_height'=>true, 
    )));

    $wp_customize->add_setting('slide5_text', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('slide5_text', array(
        'settings'=> 'slide5_text',
        'type' => 'input',
        'label'=>'Texte Slide 5',
        'section'=>'slider'
    ));

    $wp_customize->add_setting('slide5_link', array(
        'default'=> '#',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('slide5_link', array(
        'settings'=> 'slide5_link',
        'label'=>'Lien Slide 5',
        'section'=>'slider',
        'type'=>'url',
        'input_attrs' => array(
            'placeholder' => "https://example.com",
            'pattern'=>"https://.*"
          )
    ));

    $wp_customize->add_section('icone_burger', array(
        'title'=> 'Icone menu burger',
        'priority'=>50
    ));

    $wp_customize->add_setting('icone', array(
        'default'=> '',
        'transport' => 'refresh',
        'sanitize_callback'=>'esc_attr'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'icone', array(
        'settings'=> 'icone',
        'mime_type' => 'image',
        'label'=>'Icône du menu-burger',
        'section'=>'icone_burger',
        'height'=>50, 
		'width'=>50, 
		'flex_width'=>true, 
		'flex_height'=>true, 
    )));
}
add_action('customize_register','iltordello_customize_register');

// Affichage des options
function theme_customize_css(){
    $couleurTexte = get_theme_mod('text_color');
    $couleurTitre = '#'.get_header_textcolor();
    $couleurTitresSec = get_theme_mod('title_color');
    $buttonsColor = get_theme_mod( 'button_color', '#c89a26' );
    $footerColor = get_theme_mod( 'footer_color', '#9c4a21b7');
    $textFooterColor = get_theme_mod( 'text_footer');
    $buttonFooterColor = get_theme_mod( 'button_footer');
?>
<style>
     .wp-element-button {
        background-color: <?php echo $buttonsColor ?>;
     }

    #pages div, p {
        color:<?php echo $couleurTexte; ?>;
    }

    .site-title, .site-description {
        color:<?php echo $couleurTitre;?>;
    }

    h1, h2, h3, h4, h5, h6 {
        color:<?php echo $couleurTitresSec;?>;
    }

    footer, .special {
        background-color: <?php echo $footerColor ?>;
    }


    footer .wp-element-button, .special .wp-element-button {
        background-color: <?php echo $buttonFooterColor ?>;
    }

    footer p, footer h3, footer ul, footer i, footer a, footer small, .special h3 .special p, .special ul a, .special i, .special small {
        color: <?php echo $textFooterColor ?>;
    }
</style>
<?php
}
add_action('wp_head','theme_customize_css');

// Sidebars

function iltordello_register_sidebars() {
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'id' => 'sidebar-blog',
            'name'=> 'Barre latérale de la page blog',
            'description'=> 'Colonne de widgets de la page blog',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        ) );
        register_sidebar(array(
            'id' => 'sidebar-left',
            'name'=> 'Barre latérale gauche',
            'description'=> 'Colonne de widgets qui apparaît à gauche',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        ) );
        register_sidebar(array(
            'id' => 'sidebar-right',
            'name'=> 'Barre latérale droite',
            'description'=> 'Colonne de widgets qui apparaît à droite',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        ) );
        register_sidebar(array(
            'id' => 'sidebar-footer',
            'name'=> 'Zone de dépôt Footer',
            'description'=> 'Emplacement de widgets dans la 1ère section du footer',
            'before_widget'=>'<div class="widget-bas">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        ) );
    }
}
add_action('widgets_init','iltordello_register_sidebars');


function finExtrait($more){
    return '&hellip;</br><a href="'.get_post_permalink( ).'">Lire la suite</a>';
}
add_filter( 'excerpt_more', 'finExtrait');

if(!isset($content_width)) $content_width = 900;
if(is_singular()) wp_enqueue_script("comment-reply");
add_theme_support( 'automatic-feed-links');

add_action( 'init', 'iltordello_add_editor_styles');

function iltordello_add_editor_styles() {
    add_editor_style( get_stylesheet_uri());
}

add_theme_support( "post-thumbnails" );


