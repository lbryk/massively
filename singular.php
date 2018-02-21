<?php


get_header(); ?>
                             
                             <!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
							  <?php if ( have_posts() ) : ?>
                          
                            <?php while ( have_posts() ) : the_post(); ?>
								<header class="major">
									<span class="date"><?php echo get_the_date(); ?></span>
									<h1><?php the_title(); ?>
									</h1>
								</header>
								<div class="image main">
								    <?php if ( has_post_thumbnail() ) { ?>	
									        <a href="<?php echo the_permalink(); ?>" class="image fit"><?php the_post_thumbnail(); ?></a>
				                    <?php } ?>
								</div>
								<p>
								    <?php the_content(); ?>
								</p>
				            <?php endwhile; ?>
                             <?php endif; ?>
							</section>

					</div>
				
					</div>


<?php get_footer(); ?>
