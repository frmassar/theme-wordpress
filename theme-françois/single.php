<?php get_header();?>

<?php if(have_posts()) : while (have_posts()) :the_post();?>
  <h2><?php  the_title(); ?></h2>
  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>"/>
  <p><?php the_content();?></p>
  
  <?php endwhile; endif; ?>

<?php get_footer() ?>