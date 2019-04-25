<?php 
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$parent = $post->post_parent;

$section = get_post_type();
$terms = get_the_terms(get_the_ID(), 'page_type');

$current_page_type = $terms[0]->name;

if ($current_page_type == 'main') {
    $show_first_menu = 'active';
} else {
    $show_first_menu = '';
}

?>

<ul id="slide-out" class="sidenav sidenav-fixed grey lighten-3">

    <?php if ($section == 'fs') {
        echo '
    <div id="logo-wrapper" class="row section container">
        <div class="col s3">
            <img style="vertical-align: middle;" src="' . get_template_directory_uri() . '/assets/images/prof.gif">
        </div>
        <div class="col offset-s1 s8" style="padding-top: 1rem;">
            <h5> Fachschaft Physik </h5>
        </div>
    </div>';
    }
    ?>

    <?php get_search_form(); ?>
    <div id="sidenav-content" class="collapsible expandable">
        <?php
        $sidebar_menus_filter = array(
            'post_type' => $section,
            'order'          => 'ASC',
            'orderby'        => 'title',
            'tax_query' => array(
                array(
                    'taxonomy' => 'page_type',
                    'field' => 'slug',
                    'terms' => 'sidebar-menu',
                )
            ),
        );
        $sidebar_menus = new WP_Query($sidebar_menus_filter);

        if ($sidebar_menus->have_posts()) {
            while ($sidebar_menus->have_posts()) {
                $sidebar_menus->the_post();
                echo
                    '<li class="' . $show_first_menu . ' ' . is_active($post->ID, $parent) . '">
                    <div class="collapsible-header">
                        <i class="material-icons">expand_more</i>'
                        . get_the_title() .
                        '</div>
                    <div class="collapsible-body">
                    <ul class="container">';
                $subpages_filter = array(
                    'post_type'      => $section,
                    'posts_per_page' => -1,
                    'post_parent'    => $post->ID,
                    'order'          => 'ASC',
                    'orderby'        => 'menu_order'
                );
                $subpages = new WP_Query($subpages_filter);
                if ($subpages->have_posts()) {
                    while ($subpages->have_posts()) {
                        $subpages->the_post();
                        echo
                            '<a class="black-text" href="' . get_permalink() . '">
                                <li class="black-text truncate ' . is_active(get_the_ID(), $url) . '">'
                                . get_the_title() .
                                '</li>
                            </a>';
                    }
                    $subpages->reset_postdata();
                }
                echo '</ul>
                    </div>
                </li>';
            }
            /* Restore original Post Data */
            $sidebar_menus->reset_postdata();
        }
        ?>

    </div>
</ul> 