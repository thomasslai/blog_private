
<div class="col s12 m4">            
    <div class="card horizontal">
        <div style="width: 6vw; height: 100%; overflow: hidden;">
        <img style="height: 55vh; width: auto; margin-bottom: -1.5vh;" src="<?php the_post_thumbnail_url();?>">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <span class="card-title"><?php the_title() ?></span>
                <span style="font-size: medium;"><?php the_excerpt(); ?></span>
            </div>
            <div class="card-action" href="<?php the_permalink()?>">
            <a href="<?php the_permalink()?>">Mehr</a>
            </div>
        </div>
    </div>
</div>
