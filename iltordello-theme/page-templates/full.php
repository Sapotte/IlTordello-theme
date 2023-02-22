<?php
/*
Template Name: Full-width
 */
?>
<?php
get_header();
if(have_posts(  )): while(have_posts(  )): the_post(  );?>
    <section id="pages"  class="haut">     
        <!-- <h2><?php the_title() ?></h2> -->
        <?php the_content(); ?>
    </section>
<?php endwhile;
endif; ?>
</main>
<?php
get_footer(); ?>
 