<?php if (comments_open()) { ?>
  <h4><?php comments_number('No comments', '1 comment', '% comments'); ?></h4>
    <?php if (get_comments_number() == 0) { ?>
      <ul class="list">
        <li>Оставьте первый комментарий - автор старался</li>
      </ul>
    <?php } else { ?>
    <ol class="commentlist">
      <?php
        function verstaka_comment($comment, $args, $depth){
          $GLOBALS['comment'] = $comment; ?>
          <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>">
              <div class="bs-example" data-example-id="default-media">
                <div class="media">
                  <div class="media-left">
                    <?php echo get_avatar($comment, 64, '', array('class' => 'media-object') ); ?>
                  </div>
                  <div class="media-body">
                    <h5 class="media-heading blog-text-uppercase"><?php echo get_comment_author_link(); ?></h5>
                    <?php if($comment->comment_approved == '0') : ?>
                      <em><?php _e('Your comment is awaiting moderation.') ?></em>
                      <br>
                    <?php endif; ?>  
                    <?php comment_text(); ?>
                    <ul class="list-inline comment-list">
                      <li><?php echo get_comment_date(); ?></li>
                      <li> | </li>
                      <li><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></li>
                    </ul>
                  </div>
                </div>
              </div>  
            </div>
          </li>  
      <?php }
        $args = array(
          'reply_text' => 'Reply',
          'callback' => 'verstaka_comment'
        );
        wp_list_comments($args);
      ?>
    </ol>
  <?php } ?>
    <div class="blog-comment">
      <div class="contact_block">
        <div class="contact_form">
          <?php
            $fields = array(
              'author' => '<fieldset class="wow zoomIn padding_r"><input type="text" id="author" name="author" class="author" value="' . esc_attr($commenter['comment_author']) . '" placeholder="Name" pattern="[A-Za-zА-Яа-я]{3,}" maxlength="30" autocomplete="on" tabindex="1" required' . $aria_req . '></fieldset>',
              'email' => '<fieldset class="wow zoomIn padding_l"><input type="email" id="email" name="email" class="email" value="' . esc_attr($commenter['comment_author_email']) . '" placeholder="E-mail" maxlength="30" autocomplete="on" tabindex="2" required' . $aria_req . '></fieldset>'
            );

            $args = array(
              'comment_notes_before' => null,
              'comment_field' => '<div class="textarea_block wow zoomIn"><textarea id="comment" name="comment" rows="5" aria-required="true" placeholder="Comment..."></textarea></div>',
              'submit_button' => '<div class="textarea_block wow zoomIn"><div class="wow zoomIn"><input name="%1$s" type="submit" id="%2$s" value="SUBMIT" /></div></div>',
              'label_submit' => 'SUBMIT',
              'fields' => apply_filters('comment_form_default_fields', $fields)
            );
            comment_form($args);
          ?>
        </div>  
      </div>
    </div>          
  <?php } else { ?>
  <h4>Обсуждения закрыты для данной страницы</h4>
  <?php }
?>