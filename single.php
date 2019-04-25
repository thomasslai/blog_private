<?php 
$section = get_post_type();
get_header();
get_template_part('partials/sidebar');
get_template_part('partials/navbar');
?>

<main>
    <div class="row container">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
                echo '<h2>';
                the_title();
                echo '</h2>';
                the_content();
                ?>
        <?php
    endwhile;
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
?>
    </div>
    </div>
</main>

<!-- FOOTER -->
<?php get_footer(); ?> 