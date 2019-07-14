						<article class="home_ar_wrap">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="featured_image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="post_meta">
								Author: <?php the_author_posts_link(); ?> |
								posted time: <?php the_time('M d, Y'); ?> |
								Posted In:  <?php the_category(', '); ?> |
								<?php comments_popup_link('No comments','1 Comments','% comments','Comments_class','Comments Off'); ?>
							</div>
							<p><?php echo excerpt('20'); ?></p>
						</article>