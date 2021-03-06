<?php get_header(); ?>

  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          From the Firehose
        </h3>

        <?php if(have_posts()) : ?>


          <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
          <h2 class="blog-post-title">
            <?php the_title(); ?>
          </h2>
          <?php the_content(); ?>
          </div><!-- /.blog-post -->
          <?php endwhile; ?>
        <?php else: ?>
          <p><?php echo 'No Page Found'; ?></p>
        <?php endif; ?>

        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>

      </div><!-- /.blog-main -->

<?php get_footer(); ?>