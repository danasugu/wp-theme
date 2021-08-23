
<?php get_header(); ?>

    <div class="author">
      <div class="author-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/author.jpg" alt="author">
      </div>
      <div class="author-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore blanditiis velit,
        vel assumenda.
      </div>
    </div>

      <div class="social">
      <div class="newsletter">
        <input type="text" placeholder="Email newsletter" class="subscribe-input">
        <input type="submit" value="Submit" name="subscribe" class='subscribe-button'>
      </div>
      <div class="networks">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg" alt="Facebook" /></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter.svg" alt="Twitter" /></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.svg" alt="Instagram" /></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/social/search.svg" alt="Search" /></a>
      </div>
    </div>

    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) : the_post(); 
    ?>


    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
 
      <div class="article">
        <div class="thumbnail">
          <?php the_post_thumbnail( 'medium' );  ?>
        </div>
        <div class="content">
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <a class="button" href="<?php the_permalink(); ?>" >More+</a>
        </div>
      </div>

      <div class="article">
               <div class="thumbnail">
          <?php the_post_thumbnail( 'medium' );  ?>
        </div>
                <div class="content">
                  <h2><?php the_title(); ?></h2>

                   <p><?php the_excerpt(); ?></p>
                    <div class="button">More +</div>
                </div>
            </div>

    <?php  endwhile; } ?> 

<nav class="pagination">
  <?php echo paginate_links(); ?>
</nav>
    

<?php get_footer(); ?> 