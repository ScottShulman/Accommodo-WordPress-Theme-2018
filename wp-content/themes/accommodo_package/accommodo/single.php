<?php
/**
 * The Template for displaying all single posts
 */
 $accommodo_redux_demo = get_option('redux_demo');
get_header(); ?>
    <?php
            // Start the Loop.
            while ( have_posts() ) : the_post(); 
            $accommodo_avatar_author = get_post_meta(get_the_ID(),'_cmb_avatar_author', true);
            $accommodo_name_author = get_post_meta(get_the_ID(),'_cmb_name_author', true);
            $accommodo_desc_author = get_post_meta(get_the_ID(),'_cmb_desc_author', true);
            ?>
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'accommodo' ); ?></a></li>
                <?php if(isset($accommodo_redux_demo['page_text_listing'])){?>
                <li><a href="<?php echo esc_url($accommodo_redux_demo['page_link_listing']);?>"><?php if($accommodo_redux_demo['page_link_listing']!= ''){?>
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
                        
                        <!--end title-->
                        <article class="blog-post">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"></a>
                            <?php }?>
                            <header><h2><?php the_title();?></h2></header>
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
                                 <div class="tags tags-list">           
                                    <?php
                                                                        if(get_the_tag_list()) {
                                                                            echo get_the_tag_list(''.'  '.'');
                                                                        }
                                                                    ?>
                                </div>
                                
                            </figure>
                            <?php the_content();?>
                                <?php wp_link_pages(); ?>
                        </article><!-- /.blog-post-listing -->
                        <?php if(isset($accommodo_redux_demo['blog_author']) && $accommodo_redux_demo['blog_author']!=''){?>
                        <section id="about-author">
                            <header><h3><?php if(isset($accommodo_redux_demo['blog_author'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['blog_author']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'About the Author', 'accommodo' );
                                    }
                                    ?></h3></header>
                            <div class="post-author">
                            <?php if($accommodo_avatar_author != ''){?>
                                <img src="<?php echo esc_url($avatar_author);?>">
                                <?php }?>
                                <div class="wrapper">
                                    <header><?php echo esc_attr($accommodo_name_author); ?></header>
                                    <p><?php echo esc_attr($accommodo_desc_author); ?>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <?php }?>
                        <?php endwhile; ?>
                        <?php comments_template();?>
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