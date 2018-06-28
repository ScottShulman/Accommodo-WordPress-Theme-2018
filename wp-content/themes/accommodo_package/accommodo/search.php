<?php
$accommodo_redux_demo = get_option('redux_demo');
get_header(); ?>
<div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'accommodo' ); ?></a></li>
                <?php if($accommodo_redux_demo['page_link_listing']!= ''){?>
                <li><a href="<?php echo esc_url($accommodo_redux_demo['page_link_listing']);?>"><?php if(isset($accommodo_redux_demo['page_text_listing'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['page_text_listing']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Listing', 'accommodo' );
                                    }
                                    ?></a></li>
                                    <?php } ?>
                <li class="active"><?php if(isset($accommodo_redux_demo['page_text_detail'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['page_text_detail']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Detail', 'accommodo' );
                                    }
                                    ?></li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1><?php printf( esc_html__( 'Search Results for: %s', 'accommodo' ), get_search_query() ); ?></h1>
                        </div>
                        <?php 
                                        if ( have_posts() ) : 
                        while (have_posts()): the_post(); 
                                        $tracks = get_post_meta(get_the_ID(),'_cmb_tracks', true);
                                    ?>
                        <!--end title-->
                        <article class="blog-post">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"></a>
                            <?php }?>
                            <header><a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a></header>
                            <?php if($tracks!= ''){?>
                            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo esc_attr($tracks); ?>&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                            <?php } ?>
                            <figure class="meta">
                                <a href="#" class="link icon"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></a>
                                <a href="#" class="link icon"><i class="fa fa-calendar"></i><?php the_time(get_option( 'date_format' ));?></a>
                                <div class="tags">
                                    <?php 
                                            // Show all category for post
                                            $i = 1; foreach((get_the_category()) as $category) { 
                                            if ($i == 1){echo ''; }else {echo ' ';}
                                                echo '<a href="'.get_category_link($category->cat_ID).'" class="tag article">'.$category->category_nicename . ' '.'</a>'; 
                                                
                                                $i++;
                                            } ?>
                                </div>
                            </figure>
                            <p><?php if(isset($accommodo_redux_demo['blog_excerpt'])){?>
                                                        <?php echo esc_attr(accommodo_excerpt($accommodo_redux_demo['blog_excerpt'])); ?>
                                                        <?php }else{?>
                                                        <?php echo esc_attr(accommodo_excerpt(50)); 
                                                        }
                                                        ?>
                            </p>
                            <a href="<?php the_permalink();?>" class="btn btn-rounded btn-default btn-framed btn-small"><?php if(isset($accommodo_redux_demo['read_more'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read More ', 'accommodo' );
                                    }
                                    ?></a>
                        </article><!-- /.blog-post -->
                        <?php endwhile;
                        else :?> 
                       <article class="blog-post">  
                            <?php
                                // If no content, include the "No posts found" template.
                                '<p>'. esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'accommodo' ).'</p>';
                                get_search_form(); 
                            ?>
                         </article> 
                    <?php endif;?>
                        <!-- Pagination -->
                        <div class="center">
                              <?php accommodo_pagination();?>
                            <!-- end pagination-->
                        </div>
                        <!-- end center-->
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
                <div class="col-md-3">
                    <?php get_sidebar();?>
                </div>
                <!--end col-md-3-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
<?php
get_footer();
?>