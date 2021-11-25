<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<!-- Start Blog Comment -->
<div class="blog-comments">
    <div class="comments-area">
        <?php if ( have_comments() ) : ?>
        <div class="comments-title">
            <h4 class="total_comments_class">
                <?php comments_number( esc_html__('0 Comment', 'tanda'), esc_html__('1 Comment', 'tanda'), esc_html__('% Comments', 'tanda') ); ?>
            </h4>
            <div class="comments-list">
                <?php wp_list_comments('callback=tanda_theme_comment'); ?>
            </div>
        </div>
        <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
              ?>
            <div class="text-center">
              <ul class="pagination">
                <li>
                  <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
                  paginate_comments_links( 
                  array(
                  'prev_text' => wp_specialchars_decode('<i class="fa fa-angle-left"></i>',ENT_QUOTES),
                  'next_text' => wp_specialchars_decode('<i class="fa fa-angle-right"></i>',ENT_QUOTES),
                  ));  ?>
                </li> 
              </ul>
            </div>
<?php endif; // Check for comment navigation ?>
<?php if ( ! comments_open() && get_comments_number() ) : ?>
                    <p class="no-comments"><?php echo esc_html__( 'Comments are closed.' , 'tanda' ); ?></p>
                <?php endif; ?> 
                <?php endif; ?>
                <?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'comment-form',        
                'class_form' => 'contact-comments', 
                'title_reply_before'=> '<div class="title"><h4>',                
                'title_reply'=> esc_html__( 'Leave a Comment', 'tanda' ),
                'title_reply_after'=> '</h4></div>',
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'cookies' => '',
                    'author' => '<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <!-- Name -->
            <input id="author" name="author" type="text" class="form-control" placeholder="'. esc_attr__('Name', 'tanda').'" required="required" >
        </div>
</div>',
                    'email' => '<div class="col-md-6">
    <div class="form-group">
        <!-- Email -->
        <input id="email" name="email" type="email" class="form-control" placeholder="'.esc_attr__('Email', 'tanda').'" required="required">
    </div>
</div></div>'  ,                                                                                 
                ) ),   
                'comment_field' => '<div class="col-md-12">
    <div class="form-group comments">
        <!-- Comment -->
        <textarea id="form_message" name="comment"'.$aria_req.' class="form-control h-100" placeholder="'.esc_attr__('Your Comment', 'tanda').'" rows="4" data-error="Please,leave us a message."></textarea>
    </div></div>',                    
                 'label_submit' => ''.esc_attr__('Post Comment', 'tanda').'',
                 'comment_notes_before' => '',
                 'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s">%4$s</button>',
                 'comment_notes_after' => '',                    
        )
?>
<?php if ( comments_open() ) : ?>
<div class="comments-form">
<?php comment_form($comment_args); ?>
</div>
<?php endif; ?> 
    </div>
</div>
<!-- End Comments Form -->