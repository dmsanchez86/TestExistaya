<?php
function the_breadcrumb() {
    if (!is_home()) {
        echo '<span class="removed_link">';
        echo '<a href="'. get_option('home') .'">';
        bloginfo('name');
        echo "</a>";
        echo "</span> / ";
        if (is_category() || is_single()) {
            the_category('title_li=');
            if (is_single()) {
                echo " / ";
                echo '<a class="active" href="'. get_permalink() .'">';
                the_title();
                echo "</a>";
            }
        } elseif (is_page()) {
            echo '<a class="active" href="'. get_permalink() .'">';
            echo the_title();
            echo "</a>";
        }
    }else{
        echo '<span class="removed_link">';
        bloginfo('name');
        echo "</span> / ";
    }
}