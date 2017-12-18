<?php 
get_header();
?>

<!--TITELBILD-->
<div class="parallax-container">
    <div class="parallax">
        <img src="<?php bloginfo('template_url')?>/assets/images/UD4-1.jpg">
    </div>
    <!-- <div style="height: 100vh; overflow: hidden;" class="transparent-grey"> -->
        <div id="headline" class="caption center-align">
            <h2 id="headline-text" class="white-text light">PhysikOnline Blog</h2>
            <h5 class="light grey-text text-lighten-3">Alles rund um unsere Projekte, wer wir sind und was wir vorhaben.</h5>
        </div>
    <!-- </div> -->
</div>
<!--END TITELBILD-->


 <!--MAIN-->       
<div class="section grey lighten-3">

<div class="row wrap">   
<div class="section-headline" > 
<h3 class="thin">
Neueste Beiträge
</h3>
</div> 
<div id="Main" class="col s12 m12 l9">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
 
    <!-- CARD     -->
    <div class="card horizontal" >
        <div class="thumbnaildiv">
            <?php  if( has_post_thumbnail() ): ?>
                <img class="thumbnail" src="<?php the_post_thumbnail_url() ?>" >
            <?php endif; ?>
        </div>
        <div class="card-stacked" >
            <div class="card-content">
                <h4 class="light"> 
                <?php the_title(); ?>
                </h4>
                <span class="light excerptfontsize">
                <?php the_excerpt(); ?>
                <br><br>
                <a href="<?php the_permalink()?>"> mehr.. </a>
                </span>
            </div>
        </div>
    </div>
    <!-- END CARD -->
     <?php get_the_tags(); ?>       
     <?php endwhile; endif; ?>  
</div> 
<!-- END MAIN -->

<!--SIDEBAR-->
<?php get_sidebar() ?>
</div>        
</div>     

<?php get_footer(); ?>
