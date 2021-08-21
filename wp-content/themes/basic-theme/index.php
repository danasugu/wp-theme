
<?php get_header(); ?>


<!-- <div class="slogan">Everything a writer needs.</div> -->

    <div class="author">
      <div class="author-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/author.jpg" alt="author">
      </div>
      <div class="author-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore blanditiis velit,
        vel assumenda.
      </div>
    </div>

    <?php
    if (have_posts()) {
        while (have_posts()) : the_post(); ?>


 
      <div class="article">
        <div class="thumbnail">
          <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="content">
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="button">More+</a>
        </div>
      </div>

 <?php endwhile;
    }?> 

<?php get_footer(); ?>