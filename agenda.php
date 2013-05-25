    <table>
        <?php if (have_posts()) : while (have_posts()) : the_post();?> 
            <tr>
                <td><article><?php the_excerpt('(lire la suite)'); ?></article></td>
                <td><a href="<?php the_permalink(); ?>"><?php
                the_title(); ?></a></td>
            </tr>
          <?php endwhile;
        endif;?>
    </table>