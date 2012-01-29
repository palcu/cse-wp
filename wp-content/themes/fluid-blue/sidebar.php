	<div id="sidebar">
    	<ul><iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FCE-CNMB%2F140782282640349&amp;width=256&amp;colorscheme=light&amp;connections=10&amp;stream=true&amp;header=true&amp;height=587" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:587px;" allowTransparency="true"></iframe></ul>
		<ul>
		<ul><a href="http://groups.yahoo.com/group/voluntariat_cnmb_valcea/"><img src="<?php bloginfo('template_url'); ?>/yahoo.gif" /></a></ul>
			
			<?php if ( !function_exists('dynamic_sidebar')
    	    || !dynamic_sidebar() ) : ?>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2><?php _e('Author') ?></h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

			<li><h2><?php _e('Categories') ?></h2>
				<ul>
				<?php wp_list_categories('orderby=name&title_li='); ?>
				</ul>
			</li>

			<li><h2><?php _e('Archives') ?></h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>				
				
				<li><h2><?php _e('Meta') ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
				</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
		</ul>
	</div>

