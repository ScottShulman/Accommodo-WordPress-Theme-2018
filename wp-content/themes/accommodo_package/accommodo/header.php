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
                                <div class="element">
                                    <select>
                                        <option><?php echo esc_html__( '&#36;', 'accommodo' );
                                    ?></option>
                                        <option><?php echo esc_html__( '&#8364;', 'accommodo' );
                                    ?></option>
                                    </select>
                                </div>
                                <!--end element-->
                                <div class="element">
                                    <a href="#tab-sign-in" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal"><?php if(isset($accommodo_redux_demo['header_sign'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['header_sign']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Sign In', 'accommodo' );
                                    }
                                    ?></a>
                                </div>
                                <!--end element-->
                                <div class="element">
                                    <a href="#tab-register" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal"><?php if(isset($accommodo_redux_demo['header_register'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['header_register']));?>
                                    <?php }else{?>
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