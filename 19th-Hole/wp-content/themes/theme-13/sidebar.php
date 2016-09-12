	<div id="sidebar">
		<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		
            <li id="search"><h2>Search</h2>
                <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div>
                        <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
                    </div>
                </form>
            </li>
		</ul>
		
		<div id="blogroll">
		<h2>Links</h2>
    		<ul>
    			<?php get_links_list(); ?>
    		</ul>
		</div>
		
		<ul>		
			<li><h2><?php _e('Meta'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
		<?php endif; ?>
		</ul>
	</div>

