<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	
	<div class="entry-list group">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php if (get_theme_mod('excerpt-length','0') != '0'): ?>
			<div class="entry-excerpt"><?php the_excerpt(); ?></div>
		<?php endif; ?>
		<div class="entry-icon">
			<div class="entry-icon-inner"></div>
		</div>
		<div class="entry-meta">
			<span class="entry-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></span>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
				<span class="entry-comments"><i class="far fa-comment"></i><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
			<?php endif; ?>
		</div>
	</div>

</article><!--/.post-->	