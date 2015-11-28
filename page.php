<?php get_header(); ?>  

<div id="container">
  <div id="member">  
    <a href="/"><img id="member-title" src="wp-content/themes/mae-theme/images/members.png" alt="Members" /></a>  
    <div class="clear"></div>
  
  
        <div class="member-post">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>        
       
          <div class="post-content">
          <p><strong><?php the_title(); ?></a></strong> <?php edit_post_link('Edit this entry','','.'); ?></p>  
       
          <?php the_content(); ?>  
          </div><!-- end post-content"  -->
          <div class="member-sidebar">
            <img src="<?php $key="picture"; echo get_post_meta($post->ID, $key, true); ?>" />
          </div>       
          <?php endwhile; else: ?>     
        
          <h2>Woops...</h2>  
        
          <p>Sorry, no posts we're found.</p>  
        
          <?php endif; ?>   
        </div><!-- end post -->
        <div class="clear"></div>
  </div><!-- end page -->
</div><!-- end container -->
<?php get_footer(); ?> 
