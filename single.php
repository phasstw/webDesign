<?php get_header(); ?>

</header>


<?php the_post(); ?>

	<article id="post-<?php the_ID(); ?>">

		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

	</article>

<?php get_footer(); ?>