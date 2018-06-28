<?php

$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';

extract(shortcode_atts(array(

    'el_class'        => '',

    'bg_image'        => '',

    'bg_image_repeat' => '',

    'padding'         => '',

    'margin_bottom'   => '',

    'css' => '',

    'wrap_class'=>'',

    'ses_title'=>'',

    'ses_sub_title'=>'',
    'ses_content'=>'',

    'type_row' => '',

    'number_tes' => '',

    'ses_image' => '',

    'ses_text' => '',

    'ses_link' => '',

    'ses_numbertes' => '',

    'ses_tab1' => '',

    'ses_tab2' => '',

    'ses_tab3' => '',

), $atts));



wp_enqueue_script( 'wpb_composer_front_js' );




$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . get_row_css_class() . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);

if($type_row == 'type2'){

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');


}elseif($type_row == 'block'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .=' <div class="block">
            <div class="container">
                <div class="row">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

        $output .='</div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="space"></div>
        </div>';

}elseif($type_row == 'our_picks'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="block">
            <div class="container">
                <div class="title">
                    <h2>'.$ses_title.'</h2>
                </div>
                <!--end title-->
                <div class="grid masonry">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
        </div>
    </div>';
}elseif($type_row == 'destinations'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="block">
            <div class="container">
                <div class="title">
                    <h2>'.$ses_title.'</h2>
                </div>
                <!--end title-->
               <ul class="list-links">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</ul>
                <!--end list-links-->
            </div>
            <!--end container-->
        </div>';
}elseif($type_row == 'reviews'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="container">
            <div class="block">
                <div class="title">
                    <h2>'.$ses_title.'</h2>
                    <div class="row">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                    <!--end row-->
                </div>
                <!--end title-->
                <div class="bg color white"></div>
            </div>
            <!--end container-->
        </div>';

}elseif($type_row == 'our_team'){
        
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section>
                    <h2>'.$ses_title.'</h2>
                    <div class="row">';

     $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');                   

     $output .='</div>
                            <!--end row-->
                        </section>';




}else{

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');



}

echo $output;