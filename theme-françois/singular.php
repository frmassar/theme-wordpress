<?php get_header();?>
  <div class="subHeader">
  <div><h1>Welcome to my Websites</h1></div>
  </div>
  <div class="container">
    <div class="card-body">
      <h1 class="card-title"><?php the_title(); ?></h1>
      <?php if(have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
<?php get_footer();?>