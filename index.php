<?php get_header(); ?>

<div class="container my-5">
  <div class="row">
    <div class="col-md-8">
      <!-- Main content -->
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          <?php
        endwhile;
      else :
        echo '<p>No content found</p>';
      endif;
      ?>
    </div>

    <div class="col-md-4">
      <!-- Sidebar -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
