<?php 
/*
Template Name: With Left Sidebar
*/

get_header(); 
if(is_active_sidebar("sidebar-left")) : ?>
    <section id="page" class="haut avecAside">
<?php else : ?>
    <section id="page" class="haut">
<?php endif; 
    get_sidebar('left'); 
    if(have_posts(  )): while(have_posts(  )): the_post(  );?>
    <section id="pages"  class="haut">     
        <h2><?php the_title() ?></h2>
        <?php the_content(); ?>
    </section>
    <?php endwhile;
    endif; ?>
    </section>
</main>
<?php     
    get_footer();
?>