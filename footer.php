
<div class="fixed-bottom full-width">
<footer>
    <div class="row">
      <div class="large-5 columns">
        <h6><strong>Réalisé pour le cour projet multimédia</strong></h6>
        <ul>
        <li>Ce site a été réalisé dans le cadre du projet multimédia de la faculté des <a href="http://www.unifr.ch/ses">Sciences économiques et Soicale</a>
            de l'<a href="http://www.unifr.ch">Université de Fribourg</a>.
            </li>
            <li>
                Désirez-vous <a href="<?php echo get_site_url().'?author=1';?>">connaître l'équipe</a> ?
            </li>
           <li> Des questions, des remarques ? <a href="mailto:freecom@gmail.com">Contactez-nous &rarr;</a>
        </li>
        <li>
          le PDF du projet se trouve <a href="<?php echo get_template_directory_uri().'/docs/projet_multimedia.pdf';?>">ici<a>
        </li>
      </ul>
      </div>

      <div class="large-3 center columns">
        <h6><strong>Plan du site</strong></h6>
        <?php wp_nav_menu( array('menu' => 'Footer', 'depth'=>'1')); ?>
      </div>

      <div class="large-4 columns">
        <h6><strong>Suivez-nous sur les réseaux sociaux</strong></h6>
        <ul>
          <li>
              <div class="fb-like-box" data-href="https://www.facebook.com/fricom.officialpage?fref=ts" data-width="292" data-show-faces="false" data-stream="false" data-show-border="true" data-header="false"></div>          </li>
          <li>
            <a href="https://twitter.com/RedactionFricom" class="twitter-follow-button" data-show-count="false" data-lang="fr" data-size="large">Suivre @RedactionFricom</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          </li>
        </ul>
      </div>
  </div>
    </footer>
</div>
<script>
    document.write('<script src=<?php echo get_template_directory_uri(); ?>' +
            ('__proto__' in {} ? '/javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
            '.js><\/script>')
</script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.alerts.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.clearing.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.cookie.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.dropdown.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.forms.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.joyride.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.magellan.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.orbit.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.placeholder.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.reveal.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.section.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.tooltips.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/foundation.topbar.js"></script>


<script>
    $(document).foundation();
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(function() {
        $('.current-menu-item').addClass('active');
//       $('.menu-item').has('ul').addClass('has-dropdown')
//       $('.menu-item ul').addClass('dropdown');
//        var subMenu = $('.current-menu-item ul').clone().remove();
//        $('#sub-bar section').append(subMenu);
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
