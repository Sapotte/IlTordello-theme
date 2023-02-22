<footer>
<?php if (is_active_sidebar('sidebar-footer' )): ?>
    <div id="widgets-footer">
        <?php dynamic_sidebar('sidebar-footer' ); ?>
</div>
<?php endif;?>
    <nav id="menuFooter">
        <?php
            wp_nav_menu(array(
                'sort_column'=>'menu-order',
                'theme_location'=>'footer',
                'fallback_cb'=> false
            ) );
        ?>
    </nav>
    <div id="infos">
        <div id="contact">
            <?php
                $phone = get_theme_mod('iltordello_phone');
                        if($phone!='') {
                            echo '<i class="phone fa-solid fa-phone">&nbsp;<a href="tel:'.$phone.'">'.$phone.'</a></i>';
                        }
                $adresse = get_theme_mod('iltordello_adresse');
                        if($adresse!='') {
                            echo '<i class="adresse fa-solid fa-location-dot">&nbsp; '.$adresse.'</i>';
                        }
        ?>   
        </div>

        <div id="reseaux">
            <?php
                $facebook = get_theme_mod('iltordello_facebook');
                        if($facebook!='') {
                            echo '<a href="'.$facebook.'" target="_blank"><i class="fa-brands fa-facebook"></i></a>';
                        }
                $insta = get_theme_mod('iltordello_insta');
                        if($insta!='') {
                            echo '<a href="'.$insta.'" target="_blank"><i class="fa-brands fa-instagram fa-3x"></i></a>';
                        }
            ?>   
        </div>
    </div>
    
    <?php
        $copyright = get_theme_mod('iltordello_credits');
        if($copyright=='oui') {
            echo '<i id="copyright">&copy; IlTordello - '.date('Y').' / Tous droits réservés.</i>';
        }
    ?>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>