
<?php get_header(); ?>


<div class="slogan">Everything a writer needs.</div>

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

    <div class="container">
      <div class="article">
        <div class="thumbnail">
          <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="img 3">
        </div>
        <div class="content">
          <h2>Lorem, ipsum.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas alias minus dicta ullam distinctio quam
            nemo non? Minus, officia? Numquam?</p>
          <div class="button">More+</div>
        </div>
      </div>

      <div class="container">
        <div class="article">
          <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="img 3">
          </div>
          <div class="content">
            <h2>Lorem, ipsum.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas alias minus dicta ullam distinctio quam
              nemo non? Minus, officia? Numquam?</p>
            <div class="button">More+</div>
          </div>
        </div>

<?php get_footer(); ?>