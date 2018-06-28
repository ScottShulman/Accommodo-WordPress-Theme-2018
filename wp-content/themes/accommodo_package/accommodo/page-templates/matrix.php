<?php
/**
 * Template Name: Accommodation Matrix
 */
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
                <div class="col-md-3">
                    <div class="sidebar">
                        <?php get_sidebar('other');?>
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1><?php if(isset($accommodo_redux_demo['listing_title'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['listing_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Listing', 'accommodo' );
                                    }
                                    ?></h1>
                            <div class="display-selector">
                                <span><?php if(isset($accommodo_redux_demo['listing_display'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['listing_display']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Display:', 'accommodo' );
                                    }
                                    ?></span>
                                <?php if($accommodo_redux_demo['link_listing']!= ''){?>
                                <a href="<?php echo esc_url($accommodo_redux_demo['link_listing']);?>"  data-toggle="tooltip" data-placement="left" title="Display list"><i class="fa fa-th-list"></i></a>
                                <?php }?>
                                <?php if($accommodo_redux_demo['link_matrix']!= ''){?>
                                <a href="<?php echo esc_url($accommodo_redux_demo['link_matrix']);?>" class="active" data-toggle="tooltip" data-placement="left" title="Display matrix"><i class="fa fa-th"></i></a>
                                <?php }?>
                            </div>
                        </div>
                        <!--end title-->
                        <div class="row">
                            
                        <?php 
                        $args = array(   
                                    'post_type' => 'accommodation',   
                                    'paged' => $paged,
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 0;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                $cates = get_the_terms(get_the_ID(),'type');
                                $cate_name ='';
                                $cate_slug = '';
                                      foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.' ' ;
                                $cate_slug .= $cate->slug .' ';     
                                } 
                                } 
                                $i++;   
                            $latitude = get_post_meta(get_the_ID(),'_cmb_accommodo_latitude', true);
                            $longitude = get_post_meta(get_the_ID(),'_cmb_accommodo_longitude', true);
                            $desc = get_post_meta(get_the_ID(),'_cmb_accommodo_desc', true);
                            $top = get_post_meta(get_the_ID(),'_cmb_accommodo_top', true);
                            $rating = get_post_meta(get_the_ID(),'_cmb_accommodo_rating', true);
                            $bed = get_post_meta(get_the_ID(),'_cmb_accommodo_bed', true);
                            $info = get_post_meta(get_the_ID(),'_cmb_accommodo_info', true);
                            $danger = get_post_meta(get_the_ID(),'_cmb_accommodo_info_danger', true);
                            $live = get_post_meta(get_the_ID(),'_cmb_accommodo_info_live', true);
                            $price = get_post_meta(get_the_ID(),'_cmb_accommodo_price', true);
                            $warning = get_post_meta(get_the_ID(),'_cmb_accommodo_warning', true);
                            $offer = get_post_meta(get_the_ID(),'_cmb_accommodo_offer', true);
                ?> <div class="col-md-4 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="<?php echo esc_attr($latitude);?>" data-map-longitude="<?php echo esc_attr($longitude);?>" data-id="<?php echo esc_attr($i);?>">
                        <?php if($offer != ''){?>
                                <div class="ribbon"><div class="offer-number"><?php echo esc_attr($offer); ?></div><figure><?php if(isset($accommodo_redux_demo['listing_off'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['listing_off']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Off Today!', 'accommodo' );
                                    }
                                    ?></figure></div>
                                <?php }?>
                            <div class="item-wrapper">
                                        <div class="image">
                                           <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="<?php echo esc_attr($desc);?>"><i class="fa fa-question"></i></div>
                                            <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Show on map"><i class="fa fa-map-marker"></i></div>
                                            <?php if($top != ''){?>
                                <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                <?php } ?>
                                            <a href="<?php the_permalink();?>" class="wrapper">
                                    <?php $gallery = get_post_gallery( get_the_ID(), false );
             if(isset($gallery['ids'])){    
              $gallery_ids = $gallery['ids'];
              $img_ids = explode(",",$gallery_ids);
               $j=0;?>
                                        <div class="gallery">
                                        <?php   
    foreach( $img_ids AS $img_id ){ 
    $image_src = wp_get_attachment_image_src($img_id,''); 
        ?>
                                            <?php if($j == '0'){?>
                                            <img src="<?php echo esc_url($image_src[0]); ?>" alt="">
                                            <?php }else {?>
                                            <img src="#" class="owl-lazy" alt="" data-src="<?php echo esc_url($image_src[0]); ?>">
                                            <?php } ?>
                                            <?php 
            $j++;   
            }
              ?>
                                        </div>
                                        <?php }?>
                                    </a>
                                            <div class="owl-navigation"></div>
                                            <!--end owl-navigation-->
                                        </div>
                                        <!--end image-->
                                        <div class="description">
                                            <div class="meta">
                                <?php if($rating != ''){?>
                                    <span><i class="fa fa-star"></i><?php echo esc_attr($rating);?></span>
                                    <?php } ?>
                                    <?php if($bed != ''){?>
                                    <span><i class="fa fa-bed"></i><?php echo esc_attr($bed);?></span>
                                    <?php } ?>
                                </div>
                                            <div class="info">
                                                <figure class="label label-info"><?php if($info != ''){?>
                                    <figure class="label label-info"><?php echo esc_attr($info);?></figure>
                                    <?php } ?></figure>
                                                <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                                                <figure class="location"><?php echo esc_attr($cate_name);?></figure>
                                            </div>
                                        </div>
                                        <!--end description-->
                                        <div class="map-item">
                                            <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                            <div class="map-wrapper"></div>
                                        </div>
                                        <!--end map-item-->
                                    </div>
                        </div>
                        </div>
                        <?php if($i == '6'){?> 
                        <?php if(isset($accommodo_redux_demo['matrix_banner']['url']) && $accommodo_redux_demo['matrix_banner']['url'] != ''){?>
                        <?php if($accommodo_redux_demo['link_banner']!= ''){?>
                    <div class="col-md-8 col-sm-12">
                                <a href="<?php echo esc_url($accommodo_redux_demo['link_banner']);?>" class="advertising-banner equal-height">
                                    <span class="banner-badge"><?php if(isset($accommodo_redux_demo['listing_adver'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['listing_adver']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Advertising', 'accommodo' );
                                    }
                                    ?></span>
                                    <img src="<?php echo esc_url($accommodo_redux_demo['matrix_banner']['url']);?>" alt="">
                                </a>
                            </div>
                            <?php } ?>
                            <?php } ?>
                    <?php } ?>
                        <?php 
                    endwhile;?>
                    </div>
                        <div class="center">
                             <?php accommodo_pagination();?>
                            <!-- end pagination-->
                        </div>
                        <!-- end center-->
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
<?php
get_footer();
?>