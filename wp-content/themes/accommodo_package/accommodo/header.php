<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<?php 
$accommodo_redux_demo = get_option('redux_demo');?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page-wrapper">
    <div id="page-header">
        <header>
            <div class="container">
                <div class="secondary-nav">
                    <div class="nav-trigger"><a data-toggle="collapse" href="#secondary-nav" aria-expanded="false" aria-controls="secondary-nav"><i class="fa fa-user"></i></a></div>
                    <div id="secondary-nav">
                        <nav>
                            <div class="left opacity-60">
                                <a href=""><i class="fa fa-phone"></i><?php if(isset($accommodo_redux_demo['header_phone'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['header_phone']));?>
                                    <?php 
                                    }
                                    ?></a>
                                <a href="mailto:<?php if(isset($accommodo_redux_demo['header_mail'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['header_mail']));?>
                                    <?php 
                                    }
                                    ?>"><i class="fa fa-envelope"></i><?php if(isset($accommodo_redux_demo['header_mail'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['header_mail']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'hello@example.com', 'accommodo' );
                                    }
                                    ?></a>
                            </div>
                            <!--end left-->
                            <div class="right">
                             <?php   /* <div class="element">
                                    <select>
                                        <option><?php echo esc_html__( '&#36;', 'accommodo' );
                                    ?></option>
                                        <option><?php echo esc_html__( '&#8364;', 'accommodo' );
                                    ?></option>
                                    </select>
                                </div>
                                <!--end element-->
                                <?php global $current_user; wp_get_current_user(); ?>
								<?php if ( is_user_logged_in() ) { ?>
								<div class="element">
								<a href="<?php echo home_url('/login'); ?>" > <?php echo $current_user->user_login ?> </a>
								</div>
								<?php }	else {  ?>
								<div class="element">
								<a href="<?php echo home_url('/login'); ?>" > Sign In </a>
								</div>
								<?php } ?>
								<div class="element">
								<a href="<?php echo home_url('/register'); ?>" > Register </a>
								</div> */ ?>
                            <div class="element">
                                    <a href="#tab-sign-in" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal"><?php if(isset($accommodo_redux_demo['header_sign'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['header_sign']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Sign In', 'accommodo' );
                                     }
                                    ?></a>
                                </div>
                                <div class="element">
                                    <a href="#tab-register" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal"><?php if(isset($accommodo_redux_demo['header_register'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['header_register']));?>
                                    <?php  }else{?>
                                    <?php echo esc_html__( 'Register', 'accommodo' );
                                     }
                                    ?></a>
                                </div>
                                
                            </div>
                            <!--end right-->
                        </nav>
                    </div>
                </div>
                <!--end secondary-nav-->
            </div>
            <!--end container-->
            <hr>
            <div class="container">
                <div class="primary-nav">
                    <div class="left">
                        <a href="<?php echo esc_url(home_url('/')); ?>" id="brand">
                        <?php $accommodo_redux_demo = get_option('redux_demo');if(isset($accommodo_redux_demo['logo']['url']) && $accommodo_redux_demo['logo']['url'] != ''){?>
                        <img src="<?php echo esc_url($accommodo_redux_demo['logo']['url']); ?>" alt="">
                        <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
                        
                        <?php }?>
                        </a>
                        <a class="nav-trigger" data-toggle="collapse" href="#primary-nav" aria-expanded="false" aria-controls="primary-nav"><i class="fa fa-navicon"></i></a>
                    </div>
                    <!--end left-->
                    <div class="right" >
                        <nav id="primary-nav">
                            <ul>
                                <?php 
                      wp_nav_menu( 
                      array( 
                            'theme_location' => 'primary',
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
                            'items_wrap'      => '<ul class="menu-primary  %2$s">%3$s</ul>',
                            'depth'           => 0,        
                        )
                     ); ?>
                               
                            </ul>
                        </nav>
                        <!--end nav-->
                    </div>
                    <!--end right-->
                </div>
                <!--end primary-nav-->
            </div>
            <!--end container-->
        </header>
        <!--end header-->
    </div>
    <!--end page-header-->
	
	<div id="sign-in-register-modal" class="modal fade" role="dialog">
  <div class="modal-dialog m-t80">

    <!-- Modal content-->
    <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab-sign-in" aria-controls="tab-sign-in" role="tab" data-toggle="tab"><h1>Sign In</h1></a></li>
                                    <li role="presentation"><a href="#tab-register" aria-controls="tab-register" role="tab" data-toggle="tab"><h1>Register Venue</h1></a></li>
									
									   <li role="presentation"><a href="#tab-register-consumer" aria-controls="tab-register" role="tab" data-toggle="tab"><h1>Register Consumer</h1></a></li>
                                </ul>
                            </div>
                            <!--end modal-header-->
                            <div class="modal-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab-sign-in">
                                <?php echo do_shortcode(' [ultimatemember form_id=286]'); ?>  


                                    <!--end form-sign-in-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade " id="tab-register">
                                    <?php echo do_shortcode('[ultimatemember form_id=285]'); ?>
                                    <!--end form-sign-in-->
                                </div>
									<div role="tabpanel" class="tab-pane fade " id="tab-register-consumer">
                                    <?php echo do_shortcode('[ultimatemember form_id=303]'); ?>
                                    <!--end form-sign-in-->
                                </div>
                            </div>

                        </div>
                        <!--end modal-body-->
                        <div class="modal-footer">
                            <div class="center">
                                <div>Lost Password? <a href="<?php echo home_url('/password-reset'); ?>">Reset here</a></div>
                                <div>New to Accommondo? <a href="#tab-register" aria-controls="tab-register" role="tab" data-toggle="tab">Register an account</a></div>
                            </div>
                        </div>
                        <!--end modal-footer-->
                    </div>

  </div>
</div>
	