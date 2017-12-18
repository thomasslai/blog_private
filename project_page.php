<?php /* Template Name: ProjectPage */ ?>
<?php get_header() ?>
<?php get_the_tags(); ?>

<div style="text-align: center;">
<h1 class="thin"> Projekte </h1>
</div>

<div class="card horizontal" style="margin-bottom: 6vh;" >
    <div class="card-stacked" >
        <div style="text-align: center; padding: 2vh;">
            <h3 class="thin">Ilias</h3>
        </div>
        <div class="card-content">
            <div class="row">
            <?php echo do_shortcode("[ic_add_posts tag='ilias' template='single_project_template.php' showposts='3']"); ?>
            </div>
        </div>
    </div>
</div>



<div class="card horizontal" style="margin-bottom: 6vh;">
    <div class="card-stacked" >
        <div class="card-content">
            <div style="text-align: center">
                <h3 class="thin">PO App</h3>
            </div>
            <div style="margin-bottom: 7vh;" class="divider"></div>
            <div class="row">
            <?php echo do_shortcode("[ic_add_posts tag='poapp' template='single_project_template.php' showposts='3']"); ?>
            </div>
        </div>
    </div>
</div>


<div class="card horizontal" style="margin-bottom: 6vh;">
    <div class="card-stacked" >
        <div class="card-content">
            <div style="text-align: center">
                <h3 class="thin">edX</h3>
            </div>
            <div style="margin-bottom: 7vh;" class="divider"></div>
            <div class="row">
            <?php echo do_shortcode("[ic_add_posts tag='edx' template='single_project_template.php' showposts='3']"); ?>
            </div>
        </div>
    </div>
</div>


<div class="card horizontal" style="margin-bottom: 6vh;">
    <div class="card-stacked" >
        <div class="card-content">
            <div style="text-align: center">
                <h3 class="thin">TinyGU</h3>
            </div>
            <div style="margin-bottom: 7vh;" class="divider"></div>
            <div class="row">
            <?php echo do_shortcode("[ic_add_posts tag='tinygu' template='single_project_template.php' showposts='3']") ?>
            </div>
        </div>
    </div>
</div>


<div style="height: 10vh;"> </div>


<?php get_footer() ?>