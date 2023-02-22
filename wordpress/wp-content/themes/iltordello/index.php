<?php get_header(); 
if(is_active_sidebar("sidebar-blog")) : ?>
    <section id="articles" class="haut avecAside">
<?php else : ?>
    <section id="articles" class="haut">
<?php endif; ?>
    <div>
    <?php if(have_posts()): while(have_posts( )): the_post(); ?>
        <div class="unArticle">
            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="article_extrait">
                <img src="<?php echo get_the_post_thumbnail_url();?>">
            
                <div><?php  the_excerpt(); ?></div>
            </div>
        </div>
    <?php endwhile;
    the_posts_pagination();
    endif; ?>
    </div>
    <?php get_sidebar('blog');?>
    </section>
</main>
<?php 
    get_footer();
?>