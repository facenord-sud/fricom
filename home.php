<?php
/* Template Name: home */

get_header();
?>
<div class="row"><div class="columns small-12"><?php bcn_display();?></div></div>
<div class="row">
    <div class="small-12 large-9 columns">
        <div class="row">
            <div id="la-une" class="small-12 push-4 large-8 columns">
                <?php
                query_posts('cat=' . get_cat_by_id('actu') . '&posts_per_page=1');
                while (have_posts()): the_post();
                    ?>
                    <h4>A la une</h4>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <article><?php the_content('(lire la suite)'); ?></article>
                <?php endwhile;
                ?> 
            </div>
            <div class=" small-12 large-4 pull-8 columns" id="edito">
                <?php
                query_posts('cat=' . get_cat_by_id('edito') . '&posts_per_page=1');
                while (have_posts()) : the_post();
                    ?>
                    <h4>Edito</h4>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <article ><?php the_content('(lire la suite)'); ?></article>
                <?php endwhile;
                ?> 
            </div>
        </div>
        <div class="row small-12 columns">
            <ul class="small-block-grid-1 large-block-grid-2">
                <?php
                query_posts('cat=' . get_cat_by_id('actu') . '&posts_per_page=10&offset=1');
                while (have_posts()): the_post();
                    ?>
                    <li>
                        <h4><?php category_article()?></h4>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <article class="hide-for-small"><?php the_content('(lire la suite)'); ?></article>
                        <a class="show-for-small" href="<?php the_permalink() ?>">Plus d'infos...</a>
                    </li>
                <?php endwhile; ?> 
             </ul>
        </div>

    </div>
    <div class="small-12 large-3 columns">
        <aside>
            <div id="breves">
                    <h4>Brèves</h4>
                    <fieldset>
                    <?php
    //            $breves = get_posts(array('numberposts' => 3, 'category' => get_cat_by_id('breve'), 'order' => 'post_date', 'order' => 'DESC'));
                    query_posts('cat=' . get_cat_by_id('breve') . '&posts_per_page=3');
                    while (have_posts()) : the_post();
                        ?>
                        <p>
                            <h5><a href="<?php the_permalink() ?>">&rarr; <?php the_title(); ?> </a></h5>
                        </p>
                    <?php
                    endwhile;
                    ?>
                    </fieldset>
            </div>
            <div id="agenda">
                <h4>Agenda</h4>
                <fieldset>
                <?php
//            $agendas = get_posts(array('numberposts' => 3, 'category' => get_cat_by_id('agenda'), 'order' => 'post_date', 'order' => 'DESC'));
                query_posts('cat=' . get_cat_by_id('agenda') . '&posts_per_page=3');
                while (have_posts()) : the_post();
                    ?>
                    <p>
                        <h5><a href="<?php the_permalink() ?>">&rarr; <?php
                        echo get_the_excerpt().'<br/>';
                         the_title(); ?></a></h5>
                    </p>
                <?php
                endwhile;
                ?>
            </fieldset>
            </div>
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
<?php get_footer(); ?>
