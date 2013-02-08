<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title><?php bloginfo('name'); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Lato:300,800' rel='stylesheet' type='text/css'>

<style>
html { background:#eee; font:300 18px/1.1 'Lato',Verdana,sans-serif; color: #444; }
body { background: #fff; margin:58px auto 0; padding: 30px 50px 50px; width: 600px; text-align: center; position: relative; }
h1 { font-family: 'Helvetica Neue',Arial,sans-serif; font-weight: 800; font-size: 76px; margin: 40px 0; color: #000; line-height: 0.75; }
h2, p:first-of-type { font-size: 28px; font-weight: 300; margin: 36px 0 0 0; }
p { margin: 24px 0 0 0; font-size: 18px; }
small { font-size: 14px; color: #888; display: block; position: absolute; bottom: -27px; right: 0px; }
@media (max-width: 700px) {
	    html { background: #fff; }
		    body { width: 90%; padding: 1em 5%; margin-top: 0; }
			    h1, h2, p { margin: 18px 0; }
				    small { position: static; color: #aaa; font-style: italic; }
}
</style>
<?php wp_head(); ?>
<body>

<h2><?php bloginfo('description'); ?></h2>
<?php if ( have_posts() ): the_post(); ?>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<small>Last update: <?php the_time('F j') ?> at <?php the_time('g:i a'); ?></small>

<?php endif; ?>


</body>
</html>
