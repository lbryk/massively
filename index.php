<?php get_header(); 
    $excerpt = '';
?>					
				<!-- Main -->
					<div id="main">
                   
						<!-- Featured Post -->
							<article class="post featured">
							<?php
                                $args = array( 'numberposts' => '1' );
                                $recent_posts = wp_get_recent_posts($args);
                                foreach( $recent_posts as $recent ) { ?>
								
								<header class="major">
									<span class="date"><?php echo get_the_date(); ?></span>
									<h2><a href="<?php echo get_permalink( $recent['ID'] ); ?>"><?php echo $recent['post_title']; ?></a></h2>
									<p><?php  
                                            if (has_excerpt()) {
                                                $excerpt = wp_strip_all_tags(get_the_excerpt());
                                                echo $excerpt;
                                            }
                                        ?></p>
								</header>
							<?php if ( has_post_thumbnail() ) { ?>	
								<a href="#" class="image main"><?php the_post_thumbnail(array(1008, 491)); ?></a>
								<ul class="actions">
									<li><a href="<?php echo the_permalink(); ?>" class="button big">Continue reading</a></li>
								</ul>
                            <?php } ?>
				            <?php
                                                                    }
				            ?>
							</article>
                             
                             <section class="posts">
                        <?php if ( have_posts() ) : ?>
                          
                            <?php while ( have_posts() ) : the_post(); ?>
						<!-- Posts -->
							
								<article>
									<header>
										<span class="date"><?php echo get_the_date(); ?></span>
                                        <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</header>
									<?php if ( has_post_thumbnail() ) { ?>	
									        <a href="<?php echo the_permalink(); ?>" class="image fit"><?php the_post_thumbnail(); ?></a>
				                    <?php } ?>
									<p><?php the_content(); ?>
                                    </p>
								</article>	
                            					
                             <?php endwhile; ?>
                             <?php endif; ?>
                             </section>
                             
						<!-- Footer -->
							<footer>
                                <?php echo $recipient_info['phone'];  ?>
							    <?php kriesi_pagination(); ?>
							</footer>
					</div>


<?php get_footer(); ?>