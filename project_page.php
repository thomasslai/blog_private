<?php /* Template Name: ProjectPageTemplate */ ?>
<?php get_header() ?>
<?php get_the_tags(); ?>

<!--TITELBILD-->
<div class="parallax-container">
    <div class="parallax">
        <img src="<?php bloginfo('template_url')?>/assets/images/projects.jpg" style="width: 100vw; height: auto;">
    </div>
        <div class="caption center-align headline">
            <h2 class="white-text light">Projekte</h2>
        </div>
</div>
<!--END TITELBILD-->


<div class="card horizontal" style="margin-bottom: 6vh;">
<div class="card-stacked" >
    <div class="card-content">
        <div style="text-align: center">
            <h3 class="thin">edX</h3>
            <span class="light">
            Ilias ist der Name der Software, die die Basis unseres Elearning Portals darstellt. 
            Mit einer Reihe von Funktionen bietet das Ilias den Studierenden die Möglichkeit schnell und einfach auf Lernmaterialien zuzugreifen und mit Lehrpersonen und Kommilitonen direkt in Kontakt zu treten.
            </span>
        </div>
        <div style="margin-bottom: 7vh;" class="divider"></div>
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
                <span class="light">

                </span>
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
                <span class="light">
                edX ist, wie das Ilias, ein weiteres Lernmanagementsystem. Derzeit untersuchen wir dessen Möglichkeiten um unsere Diensten weiter zu verbessern.
                </span>
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
                <span class="light">
                Unter tinygu.de findet sich der von uns entwickelte URL-Shortener der Goethe Universität Frankfurt. Mit tinyGU.de können universitätsinterne URLs auf Knopfdruck verkürzt werden, sodass die Verbreitung des Links vereinfacht wird.
                </span>
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