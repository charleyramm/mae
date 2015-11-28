<?php get_header(); ?>  
<div id="container">
  <div id="page">  
    <a href="/?page_id=73"><img id="title" src="wp-content/themes/mae-theme/images/notice-board.png" alt="Notice Board" /></a>
    <div class="clear"></div>
      <?php get_sidebar(); ?>

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>



			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>


		<?php while (have_posts()) : the_post(); ?>
        <div class="post">
        
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>  
        
          <div class="information"><?php the_time('F j, Y'); ?> | Posted by <?php the_author_posts_link() ?> | <a href="<?php the_permalink() ?>"><?php comments_number('Comment', 'One comment', 'comments %'); ?></a><?php edit_post_link('Edit this entry',' | ','.'); ?></div> 

          <div class="post-content">
          <?php the_excerpt(); ?>  
          </div><!-- end post-content"  -->

          <a href="<?php the_permalink() ?>" class="more">> Read more</a>
        
        </div><!-- end post -->
		<?php endwhile; ?>


			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>
  </div><!-- end page -->
</div><!-- end container -->
<?php get_footer(); ?> 
