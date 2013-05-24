<?php
function get_cat_by_id($name) {
    $categories = array(
        'edito' => 8,
        'actu' => 2,
        'agenda' => 3,
        'breve' => 5,
        'bon-plans' =>4,
        'culture' => 6,
        'dossier' => 7
        
    );
    return $categories[$name];
}
?>
