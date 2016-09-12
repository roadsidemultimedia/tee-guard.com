<?php get_header(); ?>

	<div id="content">

<?php if (have_posts()) : ?>
		
<?php while (have_posts()) : the_post(); ?>

        <div class="post" id="post-<?php the_ID(); ?>">
            <h2 class="posttitle">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>
                <span class="postdate"><?php the_time('F j') ?></span></a>
            </h2>
            <p class="postmeta">Filed under <?php the_category(', ') ?> by <?php the_author() ?> | <a href="<?php the_permalink() ?>#comments"><?php comments_number('0 comments', '1 comment', '% comments'); ?></a></p>
            <div class="the_content">
                <?php the_content(); ?>
            </div>
        </div>
	
<?php endwhile; else: ?>

        <div class="post">
            <h2 class="posttitle">Sorry, no posts were found. Try another search?</h2>
        </div>	

<?php endif; ?>

        <div class="post">
            <p class="nav"><?php posts_nav_link(); ?></p>
        </div>	

	</div>

<?php get_footer(); ?>