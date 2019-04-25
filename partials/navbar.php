<?php 

$section = get_post_type();

if ($post->post_parent) {
  $ancestors = get_post_ancestors($post->ID);
  $root = count($ancestors) - 1;
  $parent = $ancestors[$root];
} else {
  $parent = $post->ID;
}
$custom_values = get_post_custom_values('color', $parent);
$color = $custom_values[0];
if ($section == 'fs') {
  $color = 'yellow darken-4';
}
if (empty($color)) {
  $color = 'light-blue darken-4';
}

?>

<!-- NAVBAR -->
<nav id="header" class="nav-extended <?php echo $color; ?>">
    <div class="nav-wrapper">

        <!-- SIDENAV TRIGGER -->
        <a href="#" data-target="slide-out" class="sidenav-trigger">
            <i class="material-icons">menu</i>
        </a>
        <!-- NAVBAR LINKS -->
        <ul id="nav-mobile" class="left hide-on-small-only">
            <?php
            $args = array(
              'order'     => 'ASC',
              'meta_key' => 'navbar_order',
              'orderby'   => 'meta_value',
              'tax_query' => array(
                array(
                  'taxonomy' => 'page_type',
                  'field' => 'slug',
                  'terms' => 'main',
                )
              )
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
              while ($the_query->have_posts()) {
                $the_query->the_post();
                echo
                  '<li class="' . is_active($parent, get_the_ID()) . '">
                  <a href="' . get_permalink() . '">'
                    . get_the_title() .
                    '</a>
                </li>';
              }
              /* Restore original Post Data */
              echo '</ul>';
              $the_query->reset_postdata();
            } else {
              echo 'No Posts';
              echo '</ul>';
            }
            ?>
        </ul>
        <ul class="right hide-on-med-and-up">
            <a class='dropdown-trigger btn' href='#' data-target='dropdown1' style="background-color: rgba(0,0,0,0.1);"><i class="material-icons">expand_more</i></a>
        </ul>
    </div>
    <ul id='dropdown1' class='dropdown-content'>
        <?php
        // The Query
        $the_query = new WP_Query($args);
        // The Loop
        if ($the_query->have_posts()) {
          while ($the_query->have_posts()) {
            $the_query->the_post();
            echo '<li class="' . is_active($parent, get_the_ID()) . '"><a class="truncate" href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
          }
          /* Restore original Post Data */
          echo '</ul></div>';
          wp_reset_postdata();
        }
        ?>
    </ul>
    </div>

</nav>

<div class="paddingbox"></div> 