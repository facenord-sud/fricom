<?php
require 'config-mag.php';
add_theme_support('menus');

register_nav_menus(array(
    'Top' => 'Navigation principale',
    'Footer' => 'Plan du site',
    'top-bar-l' => 'Left Top Bar', // registers the menu in the WordPress admin menu editor
    'top-bar-r' => 'Right Top Bar',
));

function get_permalink_by_title($title) {
    return get_permalink(get_page_by_title($title)->ID);
}

function print_right_aside($class) {
//    foreach ($posts as $post) {
//        echo '<div class="' . $class . '"><h4>';
//        echo $post->post_title . '</h4>';
//        
//        echo '<article>'; print_experct($post->post_content, 50,  ' (plus...)'); echo '</article>';
//        echo '</div>';
//    }
    while (have_posts()) : the_post();
        ?>
        <div class="<?php echo $class; ?>">
            <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?> &rarr;</a></h5>
        </div>
    <?php
    endwhile;
}

function theme_styles() {
    // Register the style like this for a theme:  
    // (First the unique name for the style (custom-style) then the src, 
    // then dependencies and ver no. and media type)
//    wp_register_style('knaccs', get_template_directory_uri() . '/knaccs.css', array(), '20120208', 'all');
//    
//    wp_enqueue_style('knaccs');
}

add_action('wp_enqueue_scripts', 'theme_styles');

function print_experct($text, $length = 50, $after = '...') {
    $array_text = explode(' ', $text);
    $experct = implode(' ', array_slice($array_text, 0, $length));
    if (count($array_text) > $length) {
        $experct.=$after;
    }

    echo $experct;
}

/*
http://codex.wordpress.org/Function_Reference/wp_nav_menu
*/
// the left top bar
function foundation_top_bar_l() {
    wp_nav_menu(array( 
        'container' => false,                           // remove nav container
        'container_class' => 'menu',           		// class of container
        'menu' => '',                      	        // menu name
        'menu_class' => 'top-bar-menu left',         	// adding custom nav class
        'theme_location' => 'top-bar-l',                // where it's located in the theme
        'before' => '',                                 // before each link <a> 
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
    	'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
	));
} // end left top bar
 
// the right top bar
function foundation_top_bar_r() {
    wp_nav_menu(array( 
        'container' => false,                           // remove nav container
        'container_class' => '',           		// class of container
        'menu' => '',                      	        // menu name
        'menu_class' => 'top-bar-menu right',         	// adding custom nav class
        'theme_location' => 'top-bar-r',                // where it's located in the theme
        'before' => '',                                 // before each link <a> 
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
    	'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
	));
} // end right top bar

/*
Customize the output of menus for Foundation top bar classes
*/
 
class top_bar_walker extends Walker_Nav_Menu {
 
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
        $element->has_children = !empty($children_elements[$element->ID]);
        $element->classes[] = ($element->current || $element->current_item_ancestor) ? 'active' : '';
        $element->classes[] = ($element->has_children) ? 'has-dropdown' : '';
		
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
	
    function start_el(&$output, $item, $depth, $args) {
        $item_html = '';
        parent::start_el($item_html, $item, $depth, $args);	
		
        $output .= ($depth == 0) ? '<li class="divider"></li>' : '';
		
        $classes = empty($item->classes) ? array() : (array) $item->classes;	
		
        if(in_array('section', $classes)) {
            $output .= '<li class="divider"></li>';
            $item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html);
        }
		
        $output .= $item_html;
    }
	
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }
    
} // end top bar walker

function category_article($wrapper='h4') {
    // echo '<pre>';
    // print_r(get_the_category());
    // echo "</pre>";
    foreach (get_the_category() as $key => $value) {
        // echo $value->term_id.' '.get_cat_by_id('bon-plans').'<br>';
        if ($value->term_id == get_cat_by_id('agenda') or
            $value->term_id == get_cat_by_id('dossier') or
            $value->term_id == get_cat_by_id('bon-plans') or
            $value->term_id == get_cat_by_id('culture')) {
             echo "<$wrapper>".'<a href="'.get_category_link( $value->term_id ).'" title="' . esc_attr( sprintf( __( "Voir tous les articles de : %s" ), $value->name ) ) . '">'.$value->cat_name."</a></$wrapper>";
        }
    }
}
?>
