<?php
add_theme_support('post-thumbnails'); // to allow thumbnails for each post


function is_active($active_id, $post_id)
{
  if ($active_id == $post_id) {
    return 'active';
  }
}
?>