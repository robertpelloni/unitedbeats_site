<?php get_header(); while(have_posts()): the_post(); ?><article class="ub-card"><h1><?php the_title(); ?></h1><?php the_content(); ?></article><?php endwhile; get_footer(); ?>
