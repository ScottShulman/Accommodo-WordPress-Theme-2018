<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<?php if ( have_comments() ) : ?>
<section id="comments">
    <header><h2 class="no-border">Comments</h2></header>
    <ul class="comments">
        <?php wp_list_comments('callback=accommodo_theme_comment'); ?>
                <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
                    <nav class="navigation comment-navigation" role="navigation">          
                        <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'accommodo' ) ); ?></div>
                        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'accommodo' ) ); ?></div>
                    </nav><!-- .comment-navigation -->
                <?php endif; // Check for comment navigation ?>

                <?php if ( ! comments_open() && get_comments_number() ) : ?>
                    <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'accommodo' ); ?></p>
                <?php endif; ?> 
    </ul>
</section><!-- /#comments -->
<?php endif; ?> 
<section id="leave-reply">
    <?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'commentform',    
                'class' => 'clearfix',                             
                'title_reply'=> esc_html__( 'Leave a Reply', 'accommodo' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="row"><div class="col-md-6">
                <div class="form-group">
                    <label for="form-blog-reply-name">'.esc_html__( 'Your Name', 'accommodo' ).'<em>*</em></label>
                    <input type="text" class="form-control" id="form-blog-reply-name" value="" name="form-blog-reply-name" required>
                </div><!-- /.form-group -->
            </div>
                            ',
                    'email' => '<div class="col-md-6">
                <div class="form-group">
                    <label for="form-blog-reply-email">'.esc_html__( 'Your Email', 'accommodo' ).'<em>*</em></label>
                    <input type="email" class="form-control" id="form-blog-reply-email" value="" name="form-blog-reply-email" required>
                </div><!-- /.form-group -->
            </div>
                    ',      
                                                                                           
                ) ),   
                'comment_field' => ' <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form-blog-reply-message">'.esc_html__( 'Your Comment', 'accommodo' ).'<em>*</em></label>
                                            <textarea class="form-control" id="form-blog-reply-message" rows="5" name="comment"'.$aria_req.' required></textarea>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-12 -->
                                </div>',                    
                 'label_submit' => esc_html__( 'Post Comment', 'accommodo' ),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
    <?php comment_form($comment_args); ?>
</section>