<?php 
class Home_Rollover_Widget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'home-rollover-widget',
      'Image Title Widget',
      array(
        'description' => 'Image Title Widget'
      )
    );
  }

  public function widget( $args, $instance )
  {
    // basic output just for this example
    echo'<div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="widget">
                      <div class="widget-title">
                            <h6><a href="'.esc_url(home_url()).'"><img src="'.esc_url($instance['image_uri']).'" alt=""></a></h6>
                        </div>
                        <div class="text-widget">
                            <p>                      
                               '.esc_attr($instance['text']).'
                            </p>
                        </div><!-- end text-widget -->
                        </div><!-- end widget -->
                </div><!-- end col -->';
   
  }

  public function form( $instance )
  {
    // removed the for loop, you can create new instances of the widget instead
    ?>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id('image_uri')); ?>">Image</label><br />
      <input type="text" class="img" name="<?php echo esc_attr($this->get_field_name('image_uri')); ?>" id="<?php echo esc_attr($this->get_field_id('image_uri')); ?>" value="<?php echo esc_url($instance['image_uri']); ?>" />
      <input type="button" class="select-img" value="Select Image" />
    </p>
    <p>
      <label for="<?php echo esc_attr($this->get_field_id('text')); ?>">Text</label><br />
      <input type="text" name="<?php echo esc_attr($this->get_field_name('text')); ?>" id="<?php echo esc_attr($this->get_field_id('text')); ?>" value="<?php echo esc_attr($instance['text']); ?>" class="widefat" />
    </p>
    
    <?php
  }


} 
// end class

// init the widget
add_action( 'widgets_init', create_function('', 'return register_widget("Home_Rollover_Widget");') );



class Filter_Widget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'filter-widget',
      'Filter Widget',
      array(
        'description' => 'Form Filter Widget'
      )
    );
  }

  public function widget( $args, $instance )
  {
    // basic output just for this example
 
              ?>
              <div class="box filter">
                            <h2>Search</h2>
                            <form id="form-filter" class="labels-uppercase">
                                <div class="form-group">
                                    <label for="form-filter-destination">Destination</label>
                                    <input type="text" class="form-control" id="form-filter-destination" name="destination" placeholder="Destination">
                                </div>
                                <!--end form-group-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-filter-check-in">Check In</label>
                                        <input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-filter-check-out">Nights</label>
                                        <input type="number" class="form-control" id="form-filter-check-out" name="check-out">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="center">
                                    <a href="#filter-advanced-search" class="link icon" data-toggle="collapse" aria-expanded="false" aria-controls="filter-advanced-search">Advanced Search<i class="fa fa-plus"></i></a>
                                </div>
                                <div class="collapse" id="filter-advanced-search">
                                    <div class="wrapper">
                                        <section>
                                            <h3>Rate (per night)</h3>
                                            <ul class="checkboxes list-unstyled">
                                                <li><label><input type="checkbox" name="hotel">$0 - $50<span>12</span></label></li>
                                                <li><label><input type="checkbox" name="apartment">$50 - $100<span>48</span></label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">$150 - $150<span>36</span></label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">$150+<span>56</span></label></li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </section>
                                        <!--end section-->
                                        <section>
                                            <h3>Property Type </h3>
                                            <ul class="checkboxes">
                                                <li><label><input type="checkbox" name="hotel">Apartmets<span>67</span></label></li>
                                                <li><label><input type="checkbox" name="apartment">Hotels<span>31</span></label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">Boats<span>68</span></label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">Villas<span>52</span></label></li>
                                            </ul>
                                            <div class="collapse" id="all-property-types">
                                                <ul class="checkboxes">
                                                    <li><label><input type="checkbox" name="ski-center">Ski Center<span>67</span></label></li>
                                                    <li><label><input type="checkbox" name="cottage">Cottage<span>31</span></label></li>
                                                    <li><label><input type="checkbox" name="hostel">Hostel<span>68</span></label></li>
                                                    <li><label><input type="checkbox" name="boat">Boat<span>52</span></label></li>
                                                </ul>
                                            </div>
                                            <!--end checkboxes-->
                                            <a href="#all-property-types" class="link" data-toggle="collapse" aria-expanded="false" aria-controls="all-property-types">Show all</a>
                                        </section>
                                        <!--end section-->
                                        <section>
                                            <h3>Property Facility</h3>
                                            <ul class="checkboxes no-bottom-margin">
                                                <li><label><input type="checkbox" name="wi-fi">Wi-fi<span>12</span></label></li>
                                                <li><label><input type="checkbox" name="free-parking">Free Parking<span>48</span></label></li>
                                                <li><label><input type="checkbox" name="airport">Airport Shuttle<span>36</span></label></li>
                                                <li><label><input type="checkbox" name="family-rooms">Family Rooms<span>56</span></label></li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </section>
                                        <!--end section-->
                                    </div>
                                    <!--end filter-advanced-search-->
                                </div>
                                <!--end collapse-->
                                <div class="form-group center">
                                    <button type="submit" class="btn btn-primary btn-rounded form-control">Search</button>
                                </div>
                            </form>
                            <!--end form-filter-->
                        </div>
                        <!--end filter-->
            
        <?php
   
  }


  public function form( $instance )
  {
    // removed the for loop, you can create new instances of the widget instead
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title</label><br />
      <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
    </p>
    
    <?php
  }


} 
// end class

// init the widget
add_action( 'widgets_init', create_function('', 'return register_widget("Filter_Widget");') );