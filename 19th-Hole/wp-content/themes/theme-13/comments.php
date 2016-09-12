<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!'); ?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
		
		<div class="post" id="comments">
            <h2 class="posttitle"><?php comments_number('No comments', '1 comment', '% comments' ); ?></h2>
            <ol id="commentlist">
            		
                <?php foreach ($comments as $comment) : 
                $isback = false; if($comment->comment_type == 'trackback' || $comment->comment_type == 'pingback') { $isback = true; }
			    $loopcounter++;
                if ($isback == false) { ?>
			
                    <li id="comment-<?php comment_ID() ?>"<?php if($loopcounter % 2 == 0) { echo 'class="odd"'; } ?>>
			
                        <h3 class="commenttitle"><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?> <span class="commentdate"><?php comment_time('M j') ?></span></a></h3>
			
                        <?php comment_text() ?>

                    </li>

                <?php } endforeach;?>
			
            </ol>
        
            <ol id="trackbacks">
			
			<?php foreach ($comments as $comment) : 
			$isback = false; if($comment->comment_type == 'trackback' || $comment->comment_type == 'pingback') { $isback = true; } ?>
			
			<?php if ($isback === true) { ?>
			
				<li><?php comment_author_link() ?></li>

			<?php } endforeach;?>

            </ol>
        </div>

 <?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

		<div class="post" id="comments">
            <h2 class="posttitle">Leave a reply</h2>
            <div class="the_content">
                <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
                <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
                <?php else : ?>

                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

                <?php if ( $user_ID ) : ?>

                    <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

                    <?php else : ?>

                    <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                    <label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

                    <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                    <label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

                    <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                    <label for="url"><small>Website</small></label></p>

                    <?php endif; ?>

                    <p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

                    <p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
                    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
                    <?php do_action('comment_form', $post->ID); ?>

                </form>

                    <script type="text/javascript">
                      var blogTool               = "WordPress";
                      var blogURL                = "<?php echo get_option('siteurl'); ?>";
                      var blogTitle              = "<?php bloginfo('name'); ?>";
                      var postURL                = "<?php the_permalink() ?>";
                      var postTitle              = "<?php the_title(); ?>";
                      <?php if ( $user_ID ) : ?>
                          var commentAuthor          = "<?php echo $user_identity; ?>";
                      <?php else : ?>
                          var commentAuthorFieldName = "author";
                      <?php endif; ?>
                      var commentAuthorLoggedIn  = <?php if ( !$user_ID ) { echo "false"; }
                                                         else { echo "true"; } ?>;
                      var commentFormID          = "commentform";
                      var commentTextFieldName   = "comment";
                      var commentButtonName      = "submit";
                    </script>
                    <script type="text/javascript" id="cocomment-fetchlet" src="http://www.cocomment.com/js/enabler.js"></script>
                </div>
            </div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
