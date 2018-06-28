<?php 
$textdoimain = 'accommodo';
global $pre_text;

$pre_text = 'VG ';




//add


//Hero Section
add_shortcode('hero_section', 'hero_section_func');
function hero_section_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'image' => '',
        'textview' => '',
        'textshow' => '',
        'data_lat' => '',
        'data_long' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="hero-section" data-height="600">
            <form id="form-hero" method="post" action="<?php if(isset($redux_demo['page_sendmail'])){?>
                                    <?php echo esc_url($redux_demo['page_sendmail']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'http://localhost/accommodo/?page_id=218', 'speedup' );
                                    }
                                    ?>">
                <div class="hero-inner">
                    <div class="hero-wrapper" >
                        <div class="caption">
                            <div class="inner">
                                <div class="container">
                                    <h1 class="center"><?php echo esc_attr($title);?></h1>
                                    <div class="row no-gutters">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label class="label-on-input" for="address-autocomplete">Location</label>
                                                <input type="text" class="form-control"  name="location" placeholder="Enter Location or Place Name" >
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label class="label-on-input" for="form-check-in">Check In</label>
                                                <input type="text" class="form-control date" id="form-check-in" name="date" placeholder="Check In Date">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label class="label-on-input" for="form-nights">Nights</label>
                                                <input type="number" class="form-control" id="form-nights" name="nights" placeholder="Nights">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Booking</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="favorite-search">
                                        <span>Favorite Searches</span>
                                        <a href="">Bourges</a>
                                        <a href="">Orléans</a>
                                        <a href="">Rouen</a>
                                        <a href="">Toulouse</a>
                                    </div>
                                    <!--end favorite-searches-->
                                </div>
                                <!--end container-->
                                <div class="bg-transfer"><img src="<?php echo esc_url($images[0]);?>" alt=""></div>
                                <!--end bg-transfer-->
                            </div>
                            <!--end inner-->
                        </div>
                        <!--end caption-->
                        <div class="options">
                            <div class="container">
                                <div class="wrapper">
                                    <h2>Further Options</h2>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-7">
                                            <ul class="checkboxes inline list-unstyled">
                                                <li><label><input type="checkbox" name="hotel">Hotel</label></li>
                                                <li><label><input type="checkbox" name="apartment">Apartment</label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">Breakfast Only</label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">Spa & Wellness</label></li>
                                                <li><label><input type="checkbox" name="ski-center">Ski Center</label></li>
                                                <li><label><input type="checkbox" name="cottage">Cottage</label></li>
                                                <li><label><input type="checkbox" name="hostel">Hostel</label></li>
                                                <li><label><input type="checkbox" name="boat">Boat</label></li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-4 col-sm-5">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Rate (per Night)</label>
                                                        <select class="form-control framed white" name="price">
                                                            <option value="">$0 - $100</option>
                                                            <option value="">$100 - $200</option>
                                                            <option value="">$200+</option>
                                                        </select>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-6-->
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Star Rating</label>
                                                        <select class="form-control framed white" name="rating">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-6-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end container-->
                        </div>
                        <!--end options-->
                    </div>
                    <!--end hero-wrapper-->
                    <div id="options-hidden" class="collapse">
                        <div class="container">
                            <div class="wrapper">
                                <h2>Facilities</h2>
                                <div class="row">
                                    <div class="col-md-8 col-sm-6">
                                        <ul class="checkboxes inline">
                                            <li><label><input type="checkbox" name="wi-fi">Wi-fi</label></li>
                                            <li><label><input type="checkbox" name="free-parking">Free Parking</label></li>
                                            <li><label><input type="checkbox" name="airport">Airport Shuttle</label></li>
                                            <li><label><input type="checkbox" name="family-rooms">Family Rooms</label></li>
                                            <li><label><input type="checkbox" name="pets">Pets Allowed</label></li>
                                            <li><label><input type="checkbox" name="restaurant">Restaurant</label></li>
                                            <li><label><input type="checkbox" name="indoor-pool">Indoor Pool</label></li>
                                            <li><label><input type="checkbox" name="brakfast-only">Breakfast Only</label></li>
                                        </ul>
                                        <!--end checkboxes-->
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <input type="text" name="email" class="custom-email" placeholder="Enter Email">
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end wrapper-->
                        </div>
                        <!--end container-->
                    </div>
                </div>
                <!--end hero-inner-->
                <div class="plate">
                    <a data-toggle="collapse" href="#options-hidden" aria-expanded="false" aria-controls="options-hidden"><?php echo esc_attr($textview);?></a>
                </div>
                <!--end plate-->
            </form>
            <!--end form-->
            <div class="map-wrapper">
                <div class="plate white">
                    <a href="#" data-switch="#form-hero"><?php echo esc_attr($textshow);?></a>
                </div>
                <!--end plate-->
                <div id="map-item" class="map height-100"></div>
                <!--<img src="assets/img/map.jpg" alt="">-->
            </div>
        </div>
        <script type="text/javascript">
     (function($) {
    "use strict"
    $(document).ready(function(){

    var _latitude = <?php echo esc_attr($data_lat);?>;
    var _longitude = <?php echo esc_attr($data_long);?>;
    var element = "map-item";
    var useAjax = true;
    bigMap(_latitude,_longitude, element, useAjax);

            });
    })(jQuery);
        </script>
<?php  return ob_get_clean();
} 



add_shortcode('top_accommodo', 'top_accommodo_func');
function top_accommodo_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'number'        =>      '',
        'link'        =>      '#',
        'text'        =>      '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    global $redux_demo;
    ?> 
    <div class="block">
            <div class="container">
                <div class="title">
                    <h2><?php echo esc_attr($title);?></h2>
                </div>
                <div class="row">
                <?php 
                        $args = array(   
                                    'post_type' => 'accommodation',   
                                    'paged' => $paged,
                                    'posts_per_page' => $number,
                                    'order' => 'DESC',
                                    'orderby'   => 'meta_value_num',
                                    'meta_key'  => '_cmb_accommodo_rating',
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
                ?> 
                    <div class="col-md-3 col-sm-6">
                        <div class="item big equal-height" data-map-latitude="<?php echo esc_attr($latitude);?>" data-map-longitude="<?php echo esc_attr($longitude);?>" data-id="<?php echo esc_attr($i);?>">
                        <?php if($offer != ''){?>
                                <div class="ribbon"><div class="offer-number"><?php echo esc_attr($offer); ?></div><figure><?php if(isset($redux_demo['listing_off'])){?>
                                    <?php echo htmlspecialchars_decode($redux_demo['listing_off']);?>
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
                    <!--col-md-3-->
                    <?php if($i == '4' && $images != ''){?> 
                    <div class="col-md-6 col-sm-12">
                        <a href="<?php echo esc_url($link);?>" class="advertising-banner equal-height">
                            <span class="banner-badge"><?php echo esc_attr($text);?></span>
                            <img src="<?php echo esc_url($images[0]);?>" alt="">
                        </a>
                    </div>
                    <?php } ?>
                    <?php 
                    endwhile;?>
                    </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->


<?php  return ob_get_clean();
} 

add_shortcode('recent_accommodo', 'recent_accommodo_func');
function recent_accommodo_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'number'        =>      '',
        'orderpost'        =>      '',
        'orderby'        =>      '',
        'linkview'        =>      '#',
        'textview'        =>      '',
        'link'        =>      '#',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    global $redux_demo;
    ?> 
    <div class="block">
            <div class="container">
                <div class="title">
                    <h2 class="pull-left"><?php echo esc_attr($title);?></h2>
                </div>
                <!--end title-->
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="row">
                        <?php 
                        $args = array(   
                                    'post_type' => 'accommodation',   
                                    'paged' => $paged,
                                    'posts_per_page' => $number,
                                    'order' => $orderpost,
                                    'orderby' => $orderby, 
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
                ?> 
                            <div class="col-md-3 col-sm-6">
                                <a href="<?php the_permalink();?>" class="item small">
                                    <div class="image">
                                        <div class="info">
                                            <figure class="label label-info"><?php echo esc_attr($info);?></figure>
                                            <aside>
                                                <h3><?php the_title();?></h3>
                                                <figure class="location"><?php echo esc_attr($cate_name);?></figure>
                                            </aside>
                                        </div>
                                        <div class="wrapper">
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
                                            <?php } ?>
                                            <?php 
            $j++;   
            }
              ?>
                                        </div>
                                        <?php }?>
                                        </div>
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
                                    </div>
                                    <!--end description-->
                                </a>
                                <!--end item-->
                            </div>
                            <?php 
                    endwhile;?>
                        </div>
                        <!--end row-->
                        <a href="<?php echo esc_url($linkview);?>" class="pull-right"><?php echo esc_attr($textview);?></a>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <a href="<?php echo esc_url($link);?>" class="advertising-banner">
                            <img src="<?php echo esc_url($images[0]);?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
        <!--end block-->

<?php  return ob_get_clean();
} 

add_shortcode('feature', 'feature_func');
function feature_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'icon' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-md-4 col-sm-4">
        <div class="feature">
            <aside class="circle">
                <i class="<?php echo esc_attr($icon);?>"></i>
            </aside>
            <figure>
                <h3><?php echo esc_attr($title);?></h3>
                <p><?php echo htmlspecialchars_decode($subtitle);?>
                </p>
            </figure>
        </div>
        <!--end feature-->
    </div>
<?php  return ob_get_clean();
} 



add_shortcode('blog', 'blog_func');
function blog_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '', 
        'textbutton' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    global $redux_demo;
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="block">
            <div class="container">
                <div class="title">
                    <h2 class="center"><?php echo esc_attr($title);?></h2>
                </div>
                <!--end title-->
                <div class="gallery-carousel">
                <?php 
                
                    $args = array(    
                        'paged' => $paged,
                        'post_type' => 'post',
                        'posts_per_page' => $number,
                        'order' => $orderpost,
                        'orderby' => $orderby, 
                        );
                    $wp_query = new WP_Query($args);
                    $j = 0;
                    while ($wp_query -> have_posts()): $wp_query -> the_post(); 
                    $j++;
                    $thumbnail = get_post_meta(get_the_ID(),'_cmb_thumbnail_img', true);
                    ?>
                    <div class="gallery-item">
                    <?php if($thumbnail != ''){?>
                        <a href="<?php the_permalink();?>"><div class="image"><img src="<?php echo esc_url($thumbnail);?>" alt=""></div></a>
                        <?php }?>
                        <div class="description">
                            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                            <figure><?php 
                                            // Show all category for post
                                            $i = 1; foreach((get_the_category()) as $category) { 
                                            if ($i == 1){echo ''; }else {echo ' ,';}
                                                echo $category->category_nicename ; 
                                                
                                                $i++;
                                            } ?></figure>
                            <p><?php echo esc_attr(accommodo_home_excerpt(20)); ?></p>
                            <a href="<?php the_permalink();?>" class="btn btn-default btn-small btn-framed btn-rounded"><?php echo esc_attr($textbutton);?></a>
                        </div>
                    </div>
                    <!--end gallery-item-->
                <?php endwhile; ?>
                </div>
                <!--end gallery-carousel-->
            </div>
            <!--end container-->
            <div class="bg opacity-30">
                <img src="<?php echo esc_url($images[0]);?>" alt="">
            </div>
        </div>


<?php  return ob_get_clean();
} 

add_shortcode('marketing', 'marketing_func');
function marketing_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'placeholder' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="container">
            <div class="block">
                <form class="marketing-form">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-group-inline vertical-align-middle no-margin">
                                <div class="form-group">
                                    <h3 class="font-color-white no-margin"><?php echo esc_attr($title);?></h3>
                                    <p class="font-color-white no-margin"><?php echo esc_attr($subtitle);?></p>
                                </div>
                                <div class="form-group width-50">
                                    <input type="email" class="form-control input-dark" name="location" placeholder="<?php echo esc_attr($placeholder);?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="bg color default"></div>
            </div>
        </div>
<?php  return ob_get_clean();
} 

add_shortcode('our_picks', 'our_picks_func');
function our_picks_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link' => '#',
        'image' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="grid-item  <?php if($type == 'type2'){echo 'grid-item--width2';}?>">
            <a href="<?php echo esc_url($link);?>">
                <h3><?php echo esc_attr($title);?></h3>
                <img src="<?php echo esc_url($images[0]);?>" alt="">
            </a>
        </div>
<?php  return ob_get_clean();
} 

add_shortcode('destinations', 'destinations_func');
function destinations_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link' => '#',
        'number' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <li><a href="<?php echo esc_url($link);?>"><?php echo esc_attr($title);?><span><?php echo esc_attr($number);?></span></a></li>
<?php  return ob_get_clean();
} 

add_shortcode('review', 'review_func');
function review_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'location' => '',
        'rating' => '',
        'review' => '',
        'textbutton' => '',
        'link' => '#',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-md-3 col-sm-3">
        <div class="review-single">
            <a href="<?php echo esc_url($link);?>"><h3><?php echo esc_attr($title);?></h3></a>
            <figure class="location"><?php echo esc_attr($location);?></figure>
            <div class="rating"><i class="fa fa-star"></i><?php echo esc_attr($rating);?></div>
            <p><?php echo htmlspecialchars_decode($review);?>
            </p>
            <a href="<?php echo esc_url($link);?>" class="link icon"><?php echo esc_attr($textbutton);?><i class="arrow_right"></i></a>
        </div>
        <!--end review-->
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('about_section', 'about_section_func');
function about_section_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <section>
        <h2><?php echo esc_attr($title);?></h2>
        <p>
            <?php echo htmlspecialchars_decode($subtitle);?>
        </p>
    </section>
<?php  return ob_get_clean();
} 


add_shortcode('our_team', 'our_team_func');
function our_team_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'info' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-md-6">
        <div class="member">
            <div class="image"><img src="<?php echo esc_url($images[0]);?>" alt=""></div>
            <div class="description">
                <h3><?php echo esc_attr($title);?></h3>
                <h4><?php echo esc_attr($subtitle);?></h4>
                <div class="info">
                    <?php echo htmlspecialchars_decode($info);?>
                </div>
                <!--end info-->
            </div>
            <!--end description-->
        </div>
        <!--member-->
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('address', 'address_func');
function address_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title1' => '',
        'subtitle1' => '',
        'title2' => '',
        'facebook' => '',
        'twitter' => '',
        'instagram' => '',
        'youtube' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="col-md-4">
        <h2><?php echo esc_attr($title1);?></h2>
        <address>
            <?php echo htmlspecialchars_decode($subtitle1);?>
        </address>
        <h2><?php echo esc_attr($title2);?></h2>
        <div class="social-icons">
        <?php if($facebook != ''){?>
            <a href="<?php echo esc_url($facebook);?>"><i class="fa fa-facebook"></i></a><?php } ?>
            <?php if($twitter != ''){?>
            <a href="<?php echo esc_url($twitter);?>"><i class="fa fa-twitter"></i></a><?php } ?>
            <?php if($instagram != ''){?>
            <a href="<?php echo esc_url($instagram);?>"><i class="fa fa-instagram"></i></a><?php } ?>
            <?php if($youtube != ''){?>
            <a href="<?php echo esc_url($youtube);?>"><i class="fa fa-youtube"></i></a><?php } ?>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('maps', 'maps_func');
function maps_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'data_lat' => '',
        'data_long' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
      <div class="col-md-8">
        <h2><?php echo esc_attr($title);?></h2>
        <div id="contact-map" class="map"></div>
        <!--end contact-map-->
    </div>
    <script type="text/javascript">
     (function($) {
    "use strict"
    $(document).ready(function(){

        var _latitude = <?php echo esc_attr($data_lat);?>;
    var _longitude = <?php echo esc_attr($data_long);?>;
    var element = "contact-map";
    simpleMap(_latitude,_longitude, element);


            });
    })(jQuery);
        </script>
<?php  return ob_get_clean();
} 
