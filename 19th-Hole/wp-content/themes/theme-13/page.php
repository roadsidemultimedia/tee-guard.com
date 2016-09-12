<?php get_header(); ?>

	<div id="content">

<?php if (have_posts()) : ?>
		
<?php while (have_posts()) : the_post(); ?>

        <div class="post" id="post-<?php the_ID(); ?>">
            <h2 class="posttitle">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="postmeta">Written by <?php the_author() ?></p>
            <div class="the_content">
                <?php the_content(); ?>
            </div>
        </div>
	
	<?php endwhile; else: ?>

        <div class="post">
            <h2 class="posttitle">Sorry, no posts matched your criteria</h2>
        </div>	

<?php endif; ?>
	
	</div>

<?php get_footer(); ?>