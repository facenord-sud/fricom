<?php get_header();
 ?>
<div class="row"><div class="columns small-12"><?php bcn_display();?></div></div>
<div class="row">
    <div class="large-9 small-12 columns">
        <?php if (have_posts()) : ?>    <?php while (have_posts()) : the_post(); ?>
        <section>
            <h3><?php the_title(); ?></h3>
            <article>
            <?php the_content(); ?>
        </article><!--fermeture de la div post_content-->
<div class="fb-like" data-send="true" data-width="450" data-show-faces="true" data-layout="box_count"></div>
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="RedactionFricom" data-lang="fr">Tweeter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </section>
    </div>
    <div class="large-3 small-12 columns">
        <aside>
                <h4>A lire</h4>
                <fieldset>
                <?php
                    echo '<ul>';
                    foreach (get_related_links() as $link) {
                        echo '<li><h5><a href="'.$link['url'].'">&rarr; '.$link['title'].'</a></h5></li>';
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

                <h4>Les derniers tweets</h4>
                <div id="tweet">
                    <a class="twitter-timeline" href="https://twitter.com/RedactionFricom" data-widget-id="334930436893589504">Tweets di @RedactionFricom</a>
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                    </script>
                </div>
            </aside>
        </div>    
    </div>
            <?php endwhile; ?>
        <?php endif; ?>
    
</div>
<?php get_footer() ?>
