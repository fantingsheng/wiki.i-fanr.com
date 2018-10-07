<?php
	// DISPLAY COMMENTS IF COMMENTS ARE OPENED
    if ( comments_open() ) {
		echo '<div class="comments">',
			 '<h2>';
		_e('评论', 'wikiwp');
		echo '</h2>';
		if ( have_comments() ) {
			// this is displayed if there are comments
			echo '<h3>';
			_e('这篇文章目前有', 'wikiwp');
			echo '&nbsp;';
			comments_number( __('没有回复','wikiwp'), __('one response', 'wikiwp'), __('% responses','wikiwp') );
			echo '</h3>',
				 '<ul class="commentlist">';
			wp_list_comments();
			echo '</ul>',
				 '<div class="comment-nav">',
				 '<div class="alignleft">';
			previous_comments_link();
			echo '</div>',
				 '<div class="alignright">';
			next_comments_link();
			echo '</div>',
				 '</div>';
		} else {
			// this is displayed if there are no comments so far
			_e('还没有评论...留下你的评论!', 'wikiwp');
		}
		// load comment form
		comment_form();
		echo '</div>'; // end of .content
	}