<?php get_header();?>
  <div class="subHeader">
    <div><h1>Welcome to my front-page</h1></div>
  </div>
  <div class="container">
    <a href="<?php echo site_url('/project')?>">
      <h2>All Projects</h2>
    </a>

    <?php 
      $args=array(
        'post_type'=>'projects',
        'posts_per_page'=>2
      );
      $specialpost=new WP_Query($args);
    ?>
    <div class="container">
      <div class="row">
        <?php if($specialpost->have_posts()):while($specialpost->have_posts()): $specialpost->the_post();?>
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_Id())?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php the_title()?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        <?php endwhile; endif;  ?>
      </div>
    </div>
    <?php wp_reset_query(); ?>
    <a href="<?php echo site_url('/blog')?>">
      <h2>All Blogs</h2>
    </a>
  
    <?php 
          $args=array(
            'post_type'=>'post',
            'posts_per_page'=>2
          );
          $postpost=new WP_Query($args);
          ?>

    <div class="container">
      <div class="row">
        <?php if($postpost->have_posts()):while($postpost->have_posts()): $postpost->the_post();?>
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_Id())?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php the_title()?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        <?php endwhile; endif;  ?>
      </div>
    </div>
  </div>
<?php get_footer();?>