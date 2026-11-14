<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>UnitedBeats</title>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1203453275296694" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet" />
<style><?php echo file_get_contents(__DIR__ . '/legacy-style.css'); ?></style>
<style>
body{overflow-y:auto !important;overflow-x:hidden;}
.ub-spacer{height:100vh;}
.ub-below{position:relative;z-index:30;background:rgba(0,0,0,.92);padding:3rem 1.25rem 4rem;}
.ub-below-inner{max-width:900px;margin:0 auto;color:#eee;font-family:Inter,system-ui,sans-serif}
.ub-below h2{color:#ffd700}
.ub-below a{color:#ffd700}
.ub-post{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.14);border-radius:12px;padding:1.25rem;margin:0 0 1rem}
</style>
<?php wp_head(); ?>
</head>
<body>
<?php echo file_get_contents(__DIR__ . '/legacy-markup.html'); ?>
<div class="ub-spacer" aria-hidden="true"></div>
<main class="ub-below" id="posts">
  <div class="ub-below-inner">
    <h2>Projects</h2>
    <?php wp_nav_menu(['theme_location'=>'primary','menu_class'=>'ub-nav','container'=>false,'fallback_cb'=>false]); ?>
    <h2>Latest Updates</h2>
    <?php $q=new WP_Query(['post_type'=>'post','posts_per_page'=>10]); if($q->have_posts()): while($q->have_posts()): $q->the_post(); ?>
      <article class="ub-post"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><div><?php echo get_the_date(); ?></div><?php the_excerpt(); ?></article>
    <?php endwhile; wp_reset_postdata(); else: echo '<p>No posts yet.</p>'; endif; ?>
  </div>
</main>
<?php echo file_get_contents(__DIR__ . '/legacy-scripts.html'); ?>
<?php wp_footer(); ?>
</body>
</html>
