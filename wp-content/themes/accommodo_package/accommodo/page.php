<?php
/**
 * The Template for displaying all single posts
 */
$accommodo_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if (have_posts()){ ?>
<?php while (have_posts()) : the_post()?>
<div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'accommodo' ); ?></a></li>
                <?php if(isset($accommodo_redux_demo['page_link_listing']) && $accommodo_redux_demo['page_link_listing']!= ''){?>
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
                <div class="col-md-9" <?php post_class(); ?>>
                    <div class="main-content">
                        <div class="title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <article class="blog-post">
                        <?php the_content();?>
                    <?php wp_link_pages(); ?>
                    <?php           
                    if ( comments_open() || get_comments_number() ) {
                      comments_template();
                    }
                    ?>  
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
    <?php endwhile;
}
    ?>
<?php
get_footer();
?>