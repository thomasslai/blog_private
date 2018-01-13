<?php /* Template Name: MemberPageTemplate */ ?>

<?php get_header() ?>

<div class="parallax-container">
    <div class="parallax grey lighten-4" >
        <img src="<?php bloginfo('template_url')?>/assets/images/Teamfoto2016.jpg" style="min-width: 100vw; max-width: 120vw; height: auto; opacity: 0.5;" >
    </div>
</div>
<div class="container" style="margin-bottom: 10vh;">
    <div class="card z-depth-3" style="width: 100%; margin-top: -35vh;">
        <div class="container" style="padding-top: 10vh; padding-bottom: 10vh;">
        <div class="row">
        <div class="col l3">
            <img src="<?php bloginfo('template_url')?>/assets/images/HendrikEdelmann.jpg" class="responsive-img">
        </div>
        <div class="col l5">
            <h2 class="thin">Hendrik Edelmann</h2>
            <span style="font-size: small; line-height: 0.4;">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </span>
        </div>
        <div class="col l3">
            <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Das sagen andere über ihn:</span>
                <span class="light italic">"Guter Kerl" <br><br> - Hendrik</span>
            </div>
            </div> 
        </div>
    </div>
        </div>
    </div>
</div>
<h5>
    <?php echo get_random_color() ?>
</h5>


<?php get_footer() ?>