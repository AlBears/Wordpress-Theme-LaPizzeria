<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

  <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="hero-content">
      <div class="hero-text">
        <h2><?php echo esc_html(get_option('blogdescription')); ?></h2>
        <?php the_content(); ?>
        <?php $url = get_page_by_title('About Us'); ?>
        <a class="button secondary" href="<?php echo get_permalink($url->ID); ?>">more info</a>
      </div>
    </div>
  </div>
  <?php endwhile; ?>

  <div class="main-content container">
    <main class="content-text clear">
      <h2 class="primary-text text-center">Our Specialties</h2>
      <?php
        $args = array(
          'posts_per_page'  => 3,
          'post_type'       => 'specialties',
          'category_name'   => 'pizzas',
          'orderby'         => 'rand'
        );
        $specialties = new WP_Query($args);
        while($specialties->have_posts()): $specialties->the_post();?>

        <h1><?php the_title(); ?></h1>

        <?php  endwhile; wp_reset_postdata();?>
    </main>
  </div>



<?php get_footer(); ?>
