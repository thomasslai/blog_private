<?php /* Template Name: ProjectPage */ ?>
<?php get_header() ?>
<?php get_the_tags(); ?>

<div class="grey lighten-4">

<div style="text-align: center; padding-top: 4vh;">
<h1 class="thin"> Projekte </h1>
</div>

<div class="card horizontal" >
        <div class="card-stacked" >
            <div class="card-content">
                <div style="text-align: center">
                    <h3 class="thin">Ilias</h3>
                </div>  
                <div style="margin-bottom: 7vh;" class="divider"></div>
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                    <?php if ( has_tag( $tag = "test" ) ): ?>
                    <div class="col s12 m4">            
                        <div class="card horizontal">
                            <div style="width: 6vw; height: 100%; overflow: hidden;">
                            <img style="height: 48vh; width: auto; margin-bottom: -1.5vh;" src="<?php the_post_thumbnail_url();?>">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                <span class="card-title"><?php the_title() ?></span>
                                <span style="font-size: small;"><?php the_excerpt(); ?></span>
                                </div>
                                <div class="card-action">
                                <a href="#">Mehr</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>

</div>
<!-- 
<div class="card horizontal" >
        <div class="card-stacked" >
            <div class="card-content">
                <div style="text-align: center">
                    <h3 class="thin">PO App</h3>
                </div>  
                <div style="margin-bottom: 7vh;" class="divider"></div>
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                    <?php if ( has_tag( $tag = "poapp" ) ): ?>
                    <div class="col s12 m4">            
                        <div class="card horizontal">
                            <div style="width: 6vw; height: 100%; overflow: hidden;">
                            <img style="height: 48vh; width: auto; margin-bottom: -1.5vh;" src="<?php the_post_thumbnail_url();?>">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                <span class="card-title"><?php the_title() ?></span>
                                <span style="font-size: small;"><?php the_excerpt(); ?></span>
                                </div>
                                <div class="card-action">
                                <a href="#">Mehr</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>

</div>

<div class="card horizontal" >
        <div class="card-stacked" >
            <div class="card-content">
                <div style="text-align: center">
                    <h3 class="thin">TinyGU</h3>
                </div>  
                <div style="margin-bottom: 7vh;" class="divider"></div>
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                    <?php if ( has_tag( $tag = "tinygu" ) ): ?>
                    <div class="col s12 m4">            
                        <div class="card horizontal">
                            <div style="width: 6vw; height: 100%; overflow: hidden;">
                            <img style="height: 48vh; width: auto; margin-bottom: -1.5vh;" src="<?php the_post_thumbnail_url();?>">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                <span class="card-title"><?php the_title() ?></span>
                                <span style="font-size: small;"><?php the_excerpt(); ?></span>
                                </div>
                                <div class="card-action">
                                <a href="#">Mehr</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
</div>

<div class="card horizontal" >
        <div class="card-stacked" >
            <div class="card-content">
                <div style="text-align: center">
                    <h3 class="thin">edX</h3>
                </div>  
                <div style="margin-bottom: 7vh;" class="divider"></div>
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                    <?php if ( has_tag( $tag = "edx" ) ): ?>
                    <div class="col s12 m4">            
                        <div class="card horizontal">
                            <div style="width: 6vw; height: 100%; overflow: hidden;">
                            <img style="height: 48vh; width: auto; margin-bottom: -1.5vh;" src="<?php the_post_thumbnail_url();?>">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                <span class="card-title"><?php the_title() ?></span>
                                <span style="font-size: small;"><?php the_excerpt(); ?></span>
                                </div>
                                <div class="card-action">
                                <a href="#">Mehr</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
</div> -->

</div>

<?php get_footer() ?>