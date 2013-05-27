<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/normalize.css" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/app.css" />


        <script src="<?php echo get_template_directory_uri(); ?>/javascripts/vendor/custom.modernizr.js"></script>
        <title><?php bloginfo('name') ?>
            <?php if (is_404()) : ?> &raquo; <?php _e('Not Found') ?>
            <?php elseif (is_home()) : ?> &raquo; <?php bloginfo('description') ?>
            <?php else : ?><?php wp_title() ?><?php endif ?>
        </title>





        <?php wp_get_archives('type=monthly&format=link'); ?>
        <?php //comments_popup_script(); // off by default ?>
        <?php wp_head(); 
        $noTag=TRUE;
        ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

    </head>
    <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=420500041382733";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="sticky">
    <div class=" top-bar-container">
        <div class="contain-to-grid">
            
            <nav class="top-bar">
               <!--  <ul class="title-area hide-for-small">
                    <li class="name">
                        <h1><a href="<?php echo home_url(); ?>">Actualité</a></h1>
                    </li>          
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul> -->
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    </li>          
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <?php foundation_top_bar_l(); ?>

                    <?php foundation_top_bar_r(); ?>
                </section>
            </nav>
        </div>
    </div>
</div>

            <header class=" hide-for-small row" id="logo">
                <div class="columns">
                    <div class="row">
                        <div class="large-1 columns">
                            <a href="<?php bloginfo('url'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/logo-fricom2.jpg" alt="logo du site manquant" 
                                title="le logo du site" height="100" width="100"/>
                            </a>
                        </div>
                        <div class="large-11 columns">
                            <a href="<?php bloginfo('url'); ?>">
                                <blockquote><?php bloginfo('description'); ?></blockquote>
                            </a>
                        </div>
                    </div>
                 </div>
            </header>

