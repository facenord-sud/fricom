<?php get_header();
 ?>
<div class="row"><div class="columns small-12"><?php bcn_display();?></div></div>
<div class="row">
    <div class="large-9 small-12 columns">
        <?php if (have_posts()) : ?>    <?php while (have_posts()) : the_post(); ?>
        <section>
            <h3><?php the_title(); ?></h3>
            <article>
            <?php the_content('Lire le reste de cet article &raquo;'); ?>
        </article><!--fermeture de la div post_content-->
<div class="fb-like" data-send="true" data-width="450" data-show-faces="true"></div>
        </section>
    </div>
    <div class="large-3 small-12 columns">
        <aside>
                <h4>A lire</h4>
                <fieldset>
                <?php
                    echo '<ul>';
                    foreach (get_related_links() as $link) {
                        echo '<li><a href="'.$link['url'].'">'.$link['title'].'</a></li>';
                    }
                    echo '</ul>';
                ?>
                </fieldset>

                <h4>Nuage de mots</h4>
                <fieldset>
                <?php
                
                            // print_r(get_the_tag_list('', ', ', ''));
                echo nk_wp_tag_cloud( 'single=yes&separator=  &categories=no' );
    //                echo '<ul>';
    //                foreach (get_related_links() as $link) {
    //                    echo '<li><a href="'.$link['url'].'">'.$link['title'].'</a></li>';
    //                }
    //                echo '</ul>';
                ?>
                </fieldset>
            </div>
            
        </aside>
    </div>
            <?php endwhile; ?>
        <?php endif; ?>
    
</div>
<?php get_footer() ?>
