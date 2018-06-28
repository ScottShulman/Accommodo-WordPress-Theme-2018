<?php
/**
 * The Template for displaying all single posts
 */
$accommodo_redux_demo = get_option('redux_demo');
get_header(''); ?>
<?php while(have_posts()) :the_post(); 
$rating = get_post_meta(get_the_ID(),'_cmb_accommodo_rating', true);
$reviews_title = get_post_meta(get_the_ID(),'_cmb_accommodo_title', true);
$reviews_text = get_post_meta(get_the_ID(),'_cmb_accommodo_text', true);
$offer = get_post_meta(get_the_ID(),'_cmb_accommodo_offer', true);
$latitude = get_post_meta(get_the_ID(),'_cmb_accommodo_latitude', true);
$longitude = get_post_meta(get_the_ID(),'_cmb_accommodo_longitude', true);
?>
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
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar">
                        <?php get_sidebar('other');?>
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-9 col-sm-8">
                    <div class="quick-navigation" data-fixed-after-touch="">
                        <div class="wrapper">
                            <?php 
                      wp_nav_menu( 
                      array( 
                            'theme_location' => 'other',
                            'container' => '',
                            'menu_class' => '', 
                            'menu_id' => '',
                            'menu'            => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'echo'            => true,
                             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                             'walker'            => new accommodo_wp_bootstrap_navwalker(),
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="" class=" %2$s">%3$s</ul>',
                            'depth'           => 0,        
                        )
                     ); ?>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="title">
                            <div class="left">
                                <h1><?php the_title();?><?php if($rating != ''){?>
                                <span class="rating"><i class="fa fa-star"></i><?php echo esc_attr($rating); ?></span>
                                <?php }?></h1>
                                <h3><a href="#"><?php the_terms( get_the_ID(), 'type', '', ' / ' ); ?></a> </h3>
                            </div>
                            <div class="right">
                            <?php if($accommodo_redux_demo['link_map']!= ''){?>
                                <a href="<?php echo esc_attr($accommodo_redux_demo['link_map']); ?>" class="icon scroll"><i class="fa fa-map-marker"></i><?php if(isset($accommodo_redux_demo['listing_map'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['listing_map']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'See on the map', 'accommodo' );
                                    }
                                    ?></a>
                                <?php }?>
                                <?php if($accommodo_redux_demo['link_reserve']!= ''){?>
                                <a href="<?php echo esc_attr($accommodo_redux_demo['link_reserve']); ?>" class="btn btn-primary btn-rounded scroll"><?php if(isset($accommodo_redux_demo['listing_reserve'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['listing_reserve']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Reserve Today', 'accommodo' );
                                    }
                                    ?></a>
                                <?php }?>
                            </div>
                        </div>
                        <!--end title-->
                        <section id="gallery">
                            <div class="gallery-detail">
                            <?php if($offer != ''){?>
                                <div class="ribbon"><div class="offer-number"><?php echo esc_attr($offer); ?></div><figure><?php if(isset($accommodo_redux_demo['listing_off'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['listing_off']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Off Today!', 'accommodo' );
                                    }
                                    ?></figure></div>
                                <?php }?>
                                <?php $gallery = get_post_gallery( get_the_ID(), false );
             if(isset($gallery['ids'])){    
              $gallery_ids = $gallery['ids'];
              $img_ids = explode(",",$gallery_ids);
               $j=0;?>
                                <div class="one-item-carousel">
                                <?php   
    foreach( $img_ids AS $img_id ){ 
    $image_src = wp_get_attachment_image_src($img_id,''); 
        ?>
                                    <div class="image">
                                        <a href="#reviews" class="review scroll">
                                            <div class="rating">
                                                <div class="rating-title">
                                                <?php if($rating != ''){?>
                                                    <figure class="rating"><?php echo esc_attr($rating); ?></figure>
                                                    <?php }?>
                                                    <h4><?php echo esc_attr($reviews_title); ?></h4>
                                                </div>
                                                <p><?php echo esc_attr($reviews_text); ?>
                                                </p>
                                            </div>
                                        </a>
                                        <img src="<?php echo esc_url($image_src[0]); ?>" alt="">
                                    </div>
                                    <?php 
            $j++;   
            }
              ?>
                                </div>
                                <?php }?>
                            </div>
                        </section>
                        <?php the_content();?>
                        <?php wp_link_pages(); ?>
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    
    <!--end page-content-->
    <?php endwhile; ?>
   <?php
get_footer();
?>