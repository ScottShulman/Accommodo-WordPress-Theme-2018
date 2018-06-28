<?php
/**
 * Template Name: Other Page
 */
$accommodo_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if (have_posts()){ ?>
<?php while (have_posts()) : the_post()?>
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
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    
                    <?php }else {
                        echo 'Page Canvas For Page Builder'; 
                    }?>
                    </div>
                    </div>
<?php
get_footer();
?>