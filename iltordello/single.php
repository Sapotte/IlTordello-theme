<!-- Gère affichage article en page seule -->

<?php get_header();

    if(is_active_sidebar( 'sidebar-droite')) : ?>
    <section id="articleSeul" class="haut avecAside">
<?php else : ?>
    <section id="articleSeul"  class="haut">    
<?php endif; 
    if(have_posts(  )): while(have_posts(  )): the_post(  );?>
        <div class="precSuiv">
            <div class="articlePrec">
                <?php previous_post_link(); ?>
            </div>
            <div class="articleSuiv">
                <?php next_post_link(); ?>
            </div>
        </div>    
        <h2><?php the_title() ?></h2>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <p class="article">Les articles et le profil de <?php the_author_posts_link(); ?></p>
        <p class="article">Publié le <?php the_date(); ?></p>
        <p class="article">Catégorie(s) : <?php the_category(); the_tags(); ?></p>
        <!-- <p class="article"></p> -->
        <div id="comments" class="article">
            <h3>Les commentaires de l'article</h3>
            <?php comments_template( ); ?>
        </div>
    </section>
<?php endwhile;
    endif;
get_footer(); ?>