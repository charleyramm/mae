
<?php get_header(); ?>  

<div id="container">
  <div id="page">  
    <a href="/?page_id=73"><img id="title" src="wp-content/themes/mae-theme/images/notice-board.png" alt="Notice Board" />  </a>
    <div class="clear"></div>

      <?php get_sidebar(); ?>
        
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
        <div class="post">
        
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>  
        
          <div class="information"><?php the_time('F j, Y'); ?> | Posted by <?php the_author_posts_link() ?> | <a href="<?php the_permalink() ?>"><?php comments_number('Comment', 'One comment', 'comments %'); ?></a><?php edit_post_link('Edit this entry',' | ','.'); ?></div> 
        
          <div class="post-content">
          <?php the_content(); ?>  
          </div><!-- end post-content"  --> 

           <?php comments_template(); // Get wp-comments.php template ?> 
        
        </div><!-- end post -->
        <div class="clear"></div>
      
      <?php endwhile; else: ?>  
    
      <h2>Woops...</h2>  
    
      <p>Sorry, no posts we're found.</p>  
    
      <?php endif; ?>   
			<div><?php previous_post_link('&laquo; %link') ?> | <?php next_post_link('%link &raquo;') ?></div>
  </div><!-- end page -->
</div><!-- end container -->
<?php get_footer(); ?> 

