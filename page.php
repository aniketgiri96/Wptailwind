<?php get_header(); ?>
<main class="p-10">
  <?php while (have_posts()) : the_post(); ?>
    <div class="prose max-w-none">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
