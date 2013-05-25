<ul class="small-block-grid-1 large-block-grid-3">
        <?php if (have_posts()) : while (have_posts()) : the_post();?> 
            <li>
                <h3><a href="<?php the_permalink(); ?>"><?php
                the_title(); ?></a></h3>
                <article><?php the_content('(lire la suite)'); ?></article>
            </li>
          <?php endwhile;
        endif;?>
 </ul>