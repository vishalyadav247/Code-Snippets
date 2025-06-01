<?php 

// code should be paste in function.php
function load_categories_into_acf_field($field) {
    
    if ($field['type'] == 'select') {
        $categories = get_categories(array('hide_empty' => 0));
        $field['choices'] = array('' => 'None'); // Optional: add a 'None' option

        foreach ($categories as $category) {
           
            $field['choices'][$category->name] = $category->name;
        }
    }

    return $field;
}

add_filter('acf/load_field/name=blog_category', 'load_categories_into_acf_field');

?>