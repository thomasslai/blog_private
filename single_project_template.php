
<div class="carousel-item white-text" href="<?php the_permalink();?>" style="background-image: url(<?php the_post_thumbnail_url();?>)">
    <div class="row">
        <div class="col s12 m7 l5" style="height: 100vh; background-color: rgba(0,0,0,0.5); padding: 4vh;">
        <span class="card-title"><?php the_title();?></span>
        <span class="light single_project_excerpt"><?php the_excerpt(); ?></span>
        </div>
    </div>
</div>