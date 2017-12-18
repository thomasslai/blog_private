<?php get_header(); ?>


   <div id="main">
       
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="entry">
            <?php the_content(); ?>
         </div>
      <?php endwhile; endif; ?>
          
      <?php 
         /*
          * Kommentare sind auf Seiten deaktiviert. 
          * Möchtest du die Kommentarfunktion auf Seiten aktivieren, entferne einfach die beiden "//"-Zeichen vor "comments_template();"
          */
          
         //comments_template();
      ?>
             
   </div><!-- main -->

<footer id="Footer" class="page-footer light-blue darken-4">
      <div class="footer-copyright">
        <div class="footainer">
            © 2017 PhysikOnline
            <ul>
            <li><a href="<?php echo home_url(); ?>/wp-admin">Bearbeiten</a>
            </ul>
        </div>
      </div>
</footer>          
 
<?php get_footer(); ?>