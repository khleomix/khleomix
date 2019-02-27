			<div class="share">
				<button class="share-toggle-button" aria-label="Share toggle">
					<i class="share-icon fas fa-share-alt"></i>
				</button>
				<ul class="share-items">
					<li class="share-item">
						<a rel="nofollow" target="_blank" href="https://www.facebook.com/share.php?u=<?php echo wp_get_shortlink(); ?>" data-link="http://www.facebook.com/share.php?u=<?php echo wp_get_shortlink(); ?>" class="share-button popout" aria-label="Facebook">
							<i class="share-icon fab fa-facebook"></i>
						</a>
					</li>
					<li class="share-item">
						<a rel="nofollow" target="_blank" href="https://twitter.com/share?original_referer=/&amp;text=<?php the_title(); ?>&amp;url=<?php echo wp_get_shortlink(); ?>&amp;via=jpalmes" data-link="https://twitter.com/share?original_referer=/&amp;text=<?php the_title(); ?>&amp;url=<?php echo wp_get_shortlink(); ?>&amp;via=jpalmes" class="share-button popout" aria-label="Twitter">
							<i class="share-icon fab fa-twitter"></i>
						</a>
					</li>
					<li class="share-item">
						<a rel="nofollow" target="_blank" href="https://www.linkedin.com/cws/share?url=<?php echo wp_get_shortlink(); ?>" data-link="https://www.linkedin.com/cws/share?url=<?php echo wp_get_shortlink(); ?>" class="share-button popout" aria-label="Linkedin">
							<i class="share-icon fab fa-linkedin"></i>
						</a>
					</li>
					<li class="share-item">
						<a rel="nofollow" href="mailto:?cc=info@khleomix.com&amp;subject=<?php the_title(); ?> via <?php bloginfo('name'); ?>&amp;body=I've just read '<?php the_title(); ?>' at <?php the_permalink(); ?>" class="share-button" aria-label="email">
							<i class="share-icon fas fa-envelope"></i>
						</a>
					</li>
				</ul>
			</div>

			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800" height="1">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="12" result="blur" />
						<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -15" result="goo" />
						<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
					</filter>
				</defs>
			</svg>
