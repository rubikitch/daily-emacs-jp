<?php
function my_pre_get_posts($query) {
    if (is_category('るびきち流Emacs超入門')) {
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'my_pre_get_posts');
?>
