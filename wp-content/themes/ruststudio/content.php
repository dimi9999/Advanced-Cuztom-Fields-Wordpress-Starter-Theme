﻿<?php
/* Blog Post Content */
?>
<!-- blog post content -->
<div class="blog-post">
   <h2 class="blog-post-title">
	  <?php if(is_single()) : ?>
	  <?php the_title(); ?>
	  <?php else : ?>
	  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	  <?php endif; ?>
   </h2>
   <p class="blog-post-meta"><?php the_time('F j, Y g:i a');?> <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"> Posted by: <?php the_author();?></a></p>
   <!-- < ?'php the_content(); '?> -->
   <?php if(has_post_thumbnail()) : ?>
   <div class="post-thumb">
	  <?php the_post_thumbnail(); ?>
   </div>
   <?php endif; ?>
   <?php if(is_single()) : ?>
   <?php the_content(); ?>
   <?php else : ?>
   <?php the_excerpt(); ?>
   <?php endif; ?>
   <?php if(is_single()) : ?>
   <?php comments_template(); ?>
   <?php endif; ?>
   <!-- blog posts pagination -->
</div>
          
         