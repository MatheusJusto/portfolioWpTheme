<section class="portfolio">
                    <div class="container">
                     <?php
                        $args = array('post_type'=>'post','offset'=>0, 'showposts'=>-1);
                        $my_posts = get_posts( $args );
                    ?>
                    <?php
                        if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );
                    ?>
                            <ul>
                                <li>
                                    <figure class="imghvr-flip-diag-1">
                                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                                        <figcaption>
                                                <a href="<?php the_post_thumbnail_url();?>" data-lightbox="roadtrip" data-title="<?php the_content()?>">
                                                    <h3><?php the_title();?></h3>
                                                    <p><?php the_content();?></p>
                                                </a>
                                            <div class="overlay"><div>                                       
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        
                    </div><!--/container-->
                </section>