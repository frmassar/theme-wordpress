<?php get_header();?>
  <div class="subHeader">
  <div><h1>Welcome to my Websitesss</h1></div>
  </div>
  <div class="container">
      <div class="row">
        <?php if(have_posts()):while(have_posts()): the_post();?>
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_Id())?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php the_title()?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                <div class="card-meta">posted By <?php the_author();?> on the <?php the_time('F,J,Y')?>
                <a href="<?php echo get_the_category_list(',')?>"</a>
              </div>
            </div>
          </div>
          <?php endwhile; endif;  ?>
          <?php echo paginate_links(); ?> 
      </div>
    </div>
  </div>
<?php get_footer();?>