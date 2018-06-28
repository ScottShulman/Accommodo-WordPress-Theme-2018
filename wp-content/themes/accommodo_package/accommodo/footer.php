<?php $accommodo_redux_demo = get_option('redux_demo');?>
 <footer id="page-footer">
        <?php if(isset($accommodo_redux_demo['footer_template'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['footer_template']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( ' ', 'accommodo' );
                                    }
                                    ?>
        <!--end row-one-->
        <div class="row-two clearfix">
            <div class="container">
                <div class="copyright pull-left"><?php if(isset($accommodo_redux_demo['footer_text'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['footer_text']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '(C) 2017 Your Company, All Rights Reserved', 'accommodo' );
                                    }
                                    ?></div>
                <div class="footer-nav pull-right">
                    <?php 
                      wp_nav_menu( 
                      array( 
                            'theme_location' => 'footer',
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
            <?php if(isset($accommodo_redux_demo['footer_image']['url']) && $accommodo_redux_demo['footer_image']['url'] != ''){?>
            <div class="bg-transfer"><img src="<?php echo esc_url($accommodo_redux_demo['footer_image']['url']);?>" alt=""></div>
            <?php }else{?>
            <div class="bg-transfer"><img src="<?php echo get_template_directory_uri();?>/assets/img/footer-bg.jpg" alt=""></div>
            <?php }?> 
        </div>
        <!--end row-two-->
    </footer>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#page-header" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>
<?php wp_footer(); ?>
</body>