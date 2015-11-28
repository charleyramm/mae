<?php get_header(); ?>  

<div id="container">
  <div id="page">  
    <img id="title" src="wp-content/themes/mae-theme/images/notice-board.png" alt="Notice Board" />  
    <div class="clear"></div>
      <?php get_sidebar(); ?>
  
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
        <div class="post">
        
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>  
        
          <div class="information"><?php the_time('F j, Y'); ?> | Posted by <?php the_author_posts_link() ?> | <a href="<?php the_permalink() ?>"><?php comments_number('Comments [0]', 'Comments [1]', 'Comments [%]'); ?></a><?php edit_post_link('Edit this entry',' | ','.'); ?></div> 

          <div class="post-content">
          <?php the_excerpt(); ?>  
          </div><!-- end post-content"  -->

          <a href="<?php the_permalink() ?>" class="more">> Read more</a>
        
        </div><!-- end post -->
      
      <?php endwhile; else: ?>  
    
      <h2>Woops...</h2>  
    
      <p>Sorry, no posts we're found.</p>  
    
      <?php endif; ?>   
      <?php posts_nav_link(); ?> 
  </div><!-- end page -->
</div><!-- end container -->
<?php get_footer(); ?> 
