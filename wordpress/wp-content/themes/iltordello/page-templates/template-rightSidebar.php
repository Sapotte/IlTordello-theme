<?php 
/*
Template Name: With Right Sidebar
*/
get_header(); 
if(is_active_sidebar("sidebar-right")) : ?>
    <section id="page" class="haut avecAside">
<?php else : ?>
    <section id="page" class="haut">
<?php endif;
    if(have_posts(  )): while(have_posts(  )): the_post(  );?>
    <section id="pages"  class="haut">     
        <h2><?php the_title() ?></h2>
        <?php the_content(); ?>
    </section>
    <?php endwhile;
    endif;
    get_sidebar('droite'); ?>
    </section>
</main>
<?php     
    get_footer();
?>