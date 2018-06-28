<?php
/**
 * The template for displaying 404 pages (Not Found)
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
            <div class="main-content">
                <div class="title">
                    <h1><?php if(isset($accommodo_redux_demo['404_title'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['404_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404', 'accommodo' );
                                    }
                                    ?></h1>
                </div>
                <!--end title-->
                <div class="error-message">
                    <h2><?php if(isset($accommodo_redux_demo['404_title'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['404_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404', 'accommodo' );
                                    }
                                    ?></h2>
                    <div class="message">
                        <h3><?php if(isset($accommodo_redux_demo['404_desc'])){?>
                                    <?php echo esc_attr(htmlspecialchars_decode($accommodo_redux_demo['404_desc']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Page not found', 'accommodo' );
                                    }
                                    ?></h3>
                    </div>
                </div>
                <!--end error-message-->
                <form class="labels-uppercase" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">

                                        <input type="search" class="form-control" id="search" name="search" placeholder="<?php echo esc_html__( 'Enter Search Keyword', 'accommodo' ); ?>">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary "><?php echo esc_html__( 'Search', 'accommodo' ); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
   <?php
get_footer();

?>