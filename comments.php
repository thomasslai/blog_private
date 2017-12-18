<div id="kommentar_formular">
    
<h3 id="respond">Kommentar schreiben</h3>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 
   <p>
      <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" />
      <label for="author">Name</label>
   </p>
 
   <p>
      <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
      <label for="email">Email <small>(wird nicht veröffentlicht)</small></label>
   </p>
 
   <p>
      <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
      <label for="url">Webseite</label>
   </p>
 
   <p>
      Kommentar
      <textarea name="comment" id="comment" style="width: 100%;" rows="10" tabindex="4"></textarea>
   </p>
 
   <p>
      <input name="submit" type="submit" id="submit" tabindex="5" value="Kommentar abschicken" />
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
   </p>
 
   <?php do_action('comment_form', $post->ID); ?>
 
</form>
 
</div> <!-- kommentar_formular -->

<!--   <?php if (have_posts()) : if(is_tag('highlight')) : while (have_posts()) : the_post(); ?>    -->
<!-- <?php get_the_tags(); ?>       
<?php endwhile; endif; endif; ?>  -->