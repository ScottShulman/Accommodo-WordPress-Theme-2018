<?php 
$textdoimain = 'accommodo';
global $pre_text;

$pre_text = 'VG ';


// add



//Hero Section
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Hero Section", 'accommodo'),
   "base" => "hero_section",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'accommodo'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'accommodo')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'accommodo' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'accommodo' )
      ),
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text View Options", 'accommodo'),
      "param_name" => "textview",
      "value" => "",
      "description" => __("Text View Options", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Show Maps", 'accommodo'),
      "param_name" => "textshow",
      "value" => "",
      "description" => __("Text Show Maps", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Data Latitude", 'accommodo'),
      "param_name" => "data_lat",
      "value" => "",
      "description" => __("Latitude", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Longitude", 'accommodo'),
      "param_name" => "data_long",
      "value" => "",
      "description" => __("Longitude", 'accommodo')
   ),
   
    )));
}


// Accommodation
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Top Accommodation", 'accommodo'),
   "base" => "top_accommodo",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'accommodo'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'accommodo')
      ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of portfolio You want show.", 'accommodo'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of portfolio You want show.", 'accommodo')
      ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Banner", 'accommodo'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Text Banner", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Banner", 'accommodo'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Banner", 'accommodo')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'accommodo' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select Banner from media library to do your signature.', 'accommodo' )
      ),
    )));
}
 
//Recent Accommodation
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Recent Accommodation", 'accommodo'),
   "base" => "recent_accommodo",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'accommodo'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'accommodo')
      ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of portfolio You want show.", 'accommodo'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of portfolio You want show.", 'accommodo')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'accommodo' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'ASC : lowest to highest', 'accommodo' ) => 'ASC',
            __( 'DESC : highest to lowest', 'accommodo' ) => 'DESC',
         ),
         'description' => __( 'Select field do you want Order.', 'accommodo' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'accommodo' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Title', 'accommodo' ) => 'title',
            __( 'Date', 'accommodo' ) => 'date',
            __( 'Random', 'accommodo') => 'random',
         ),
         'description' => __( 'Select field do you want Order.', 'accommodo' )
      ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text View all", 'accommodo'),
      "param_name" => "textview",
      "value" => "",
      "description" => __("Text View all", 'accommodo')
   ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link View all", 'accommodo'),
      "param_name" => "linkview",
      "value" => "",
      "description" => __("Link View all", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Banner", 'accommodo'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Banner", 'accommodo')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'accommodo' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select Banner from media library to do your signature.', 'accommodo' )
      ),
    )));
}
//Feature
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Feature", 'accommodo'),
   "base" => "feature",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'accommodo'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'accommodo')
   ),
   
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'accommodo'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon", 'accommodo'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Input Icon", 'accommodo')
   ),
   
    )));
}

// Blog
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog", 'accommodo'),
   "base" => "blog",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'accommodo'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'accommodo')
      ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of portfolio You want show.", 'accommodo'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of portfolio You want show.", 'accommodo')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'accommodo' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'ASC : lowest to highest', 'accommodo' ) => 'ASC',
            __( 'DESC : highest to lowest', 'accommodo' ) => 'DESC',
         ),
         'description' => __( 'Select field do you want Order.', 'accommodo' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'accommodo' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Title', 'accommodo' ) => 'title',
            __( 'Date', 'accommodo' ) => 'date',
            __( 'Random', 'accommodo') => 'random',
         ),
         'description' => __( 'Select field do you want Order.', 'accommodo' )
      ),
         array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text button", 'accommodo'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text button", 'accommodo')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'accommodo' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select background image from media library to do your signature.', 'accommodo' )
      ),
    )));
}

//Marketing Form
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Marketing Form", 'accommodo'),
   "base" => "marketing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
    array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'accommodo'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'accommodo')
   ),
   
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'accommodo'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text placeholder", 'accommodo'),
      "param_name" => "placeholder",
      "value" => "",
      "description" => __("Text placeholder", 'accommodo')
   ),
   
    )));
}

//Our Picks
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Our Picks", 'accommodo'),
   "base" => "our_picks",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'accommodo'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'accommodo')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'accommodo' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image Team from media library to do your signature.', 'accommodo' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'accommodo'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'accommodo')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Select Type Picks', 'accommodo' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type1', 'accommodo' ) => 'type1',
            __( 'Type2', 'accommodo' ) => 'type2',
         ),
         'description' => __( 'Select Type', 'accommodo' )
      ),
   
    )));
}

//destinations
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Destinations", 'accommodo'),
   "base" => "destinations",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'accommodo'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'accommodo')
   ),
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'accommodo'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number", 'accommodo'),
      "param_name" => "number",
      "value" => "",
      "description" => __("Number", 'accommodo')
   ),
   
    )));
}

//Review
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Review", 'accommodo'),
   "base" => "review",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'accommodo'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'accommodo')
   ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text location", 'accommodo'),
      "param_name" => "location",
      "value" => "",
      "description" => __("Text location", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Rating", 'accommodo'),
      "param_name" => "rating",
      "value" => "",
      "description" => __("Rating of Review", 'accommodo')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Review", 'accommodo'),
      "param_name" => "review",
      "value" => "",
      "description" => __("Text Review", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'accommodo'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'accommodo'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'accommodo')
   ),
   
    )));
}

//About Section
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Section", 'accommodo'),
   "base" => "about_section",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'accommodo'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'accommodo')
   ),
   
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'accommodo'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'accommodo')
   ),
   
    )));
}


//Our Team
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Our Team", 'accommodo'),
   "base" => "our_team",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'accommodo'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'accommodo')
   ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'accommodo'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'accommodo')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'accommodo' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image Team from media library to do your signature.', 'accommodo' )
      ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Info member", 'accommodo'),
      "param_name" => "info",
      "value" => "",
      "description" => __("Info member", 'accommodo')
   ),
   
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Address", 'accommodo'),
   "base" => "address",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'accommodo'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'accommodo')
   ),
   
   
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 1", 'accommodo'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("Subtitle 1", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'accommodo'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'accommodo')
   ),
   
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link facebook", 'accommodo'),
      "param_name" => "facebook",
      "value" => "",
      "description" => __("Link facebook", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link twitter", 'accommodo'),
      "param_name" => "twitter",
      "value" => "",
      "description" => __("Link twitter", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link instagram", 'accommodo'),
      "param_name" => "instagram",
      "value" => "",
      "description" => __("Link instagram", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link youtube", 'accommodo'),
      "param_name" => "youtube",
      "value" => "",
      "description" => __("Link youtube", 'accommodo')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Maps", 'accommodo'),
   "base" => "maps",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
       array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'accommodo'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'accommodo')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Data Latitude", 'accommodo'),
      "param_name" => "data_lat",
      "value" => "",
      "description" => __("Latitude", 'accommodo')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Longitude", 'accommodo'),
      "param_name" => "data_long",
      "value" => "",
      "description" => __("Longitude", 'accommodo')
   ),
   
    )));
}
