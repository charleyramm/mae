<?php
/*
Template Name: Members page
*/
?>


<?php get_header(); ?>  

<div id="container">
  <div id="page">  
      
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="introduction">
    		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?><br />
    		<?php edit_post_link('Edit this entry','<div>','</div>'); ?>
    </div>
		<?php endwhile; endif; ?>

    <img id="members-title" src="wp-content/themes/mae-theme/images/members.png" alt="Members" /> 
      <div class="clear"></div>
      
      
      <?php global $more;   
      $args = array(
        'order'=>ASC,
        'posts_per_page' => 3,
      	'post_type' => 'page',
        'post_parent' => 2
        ); query_posts($args);?>   

      <?php while (have_posts()) : the_post(); ?>
        <div class="member"><a href="<?php the_permalink() ?>">
          <img src="<?php $key="picture"; echo get_post_meta($post->ID, $key, true); ?>" alt="<?php the_title(); ?>" /></p></a>
          <p><strong><?php the_title(); ?></strong></p>
          <?php $more = 0;       // Set (inside the loop) to display content above the more tag.
            the_content("");?><a href="<?php the_permalink() ?>" class="more">View profile ></a><?php edit_post_link('Edit this entry',' - ','.'); ?>
        </div>

      <?php endwhile;?>
      <div class="clear"></div>

      
      <?php global $more;   
      $args = array(
        'order'=>ASC,
        'posts_per_page' => 3,
        'offset' => 3,
      	'post_type' => 'page',
        'post_parent' => 2
        ); query_posts($args);?>   

      <?php while (have_posts()) : the_post(); ?>
        <div class="member"><a href="<?php the_permalink() ?>">
          <img src="<?php $key="picture"; echo get_post_meta($post->ID, $key, true); ?>" alt="<?php the_title(); ?>" /></p></a>
          <p><strong><?php the_title(); ?></strong></p>
          <?php $more = 0;       // Set (inside the loop) to display content above the more tag.
            the_content("");?><a href="<?php the_permalink() ?>" class="more">View profile ></a><?php edit_post_link('Edit this entry',' - ','.'); ?>
        </div>

      <?php endwhile;?>
      <div class="clear"></div>

      
            <?php global $more;   
      $args = array(
        'order'=>ASC,
        'posts_per_page' => 3,
        'offset' => 6,
      	'post_type' => 'page',
        'post_parent' => 2
        ); query_posts($args);?>   

      <?php while (have_posts()) : the_post(); ?>
        <div class="member"><a href="<?php the_permalink() ?>">
          <img src="<?php $key="picture"; echo get_post_meta($post->ID, $key, true); ?>" alt="<?php the_title(); ?>" /></p></a>
          <p><strong><?php the_title(); ?></strong></p>
          <?php $more = 0;       // Set (inside the loop) to display content above the more tag.
            the_content("");?><a href="<?php the_permalink() ?>" class="more">View profile ></a><?php edit_post_link('Edit this entry',' - ','.'); ?>
        </div>

      <?php endwhile;?>
      <div class="clear"></div>
 



    
  </div><!-- end page -->


</div><!-- end container -->
<?php get_footer(); ?> 
