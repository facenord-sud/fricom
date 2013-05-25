<?php
get_header();
$categories = get_the_category();
$cat = $categories[0];
?>
<div class="row"><div class="columns small-12"><?php bcn_display();?></div></div>
    <div class="row">
        <div class="large-9 columns">
            <?php
            if($cat->term_id == get_cat_by_id('agenda')) {
                require_once "agenda.php";
            } else {
                require_once "category-content.php";
            }?>
        </div>
        <div class="large-3 columns">
            <aside>
            <div id="breves">
                    <h4>La vidéo de la semaine</h4>
                    <fieldset>
                    <?php
                    query_posts('cat=' . get_cat_by_id('video') . '&posts_per_page=1');
                    while (have_posts()): the_post();
                        ?>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <article><?php the_content('(lire la suite)'); ?></article>
                    <?php endwhile;?>
                    </fieldset>
            </div>
            <div id="agenda">
                <h4>La dernière brève</h4>
                <fieldset>
                <?php
    //            $breves = get_posts(array('numberposts' => 3, 'category' => get_cat_by_id('breve'), 'order' => 'post_date', 'order' => 'DESC'));
                    query_posts('cat=' . get_cat_by_id('breve') . '&posts_per_page=1');
                    while (have_posts()) : the_post();
                        ?>
                        <p>
                            <h5><a href="<?php the_permalink() ?>">&rarr; <?php the_title(); ?> </a></h5>
                            <article><?php the_content('(lire la suite)'); ?></article>
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
<?php 
get_footer();
?>
