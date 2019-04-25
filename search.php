<?php get_header();
get_template_part('partials/navbar');
get_template_part('partials/sidebar');
?>

<main class="container section">
    <?php 
    $s = get_search_query();
    $args = array(
        's' => $s
    );
    // The Query
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
    <ul class="collection with-header">
        <li class="collection-header">
            <h4>Deine Suchergebnisse für <strong><?php echo $s ?></strong>
            </h4>
        </li>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li class="collection-item">
            <a href="<?php the_permalink() ?>" class="collection-item">
                <?php the_title(); ?>
                <div class="black-text">
                    <?php the_excerpt(); ?>
                </div>
            </a>

        </li>

        <?php endwhile; ?>
    </ul>
    <!-- <p><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p> -->

    <?php else : ?>
    <h2>Leider nichts gefunden</h2>

    <?php endif; ?>
</main>


<?php get_footer(); ?> 