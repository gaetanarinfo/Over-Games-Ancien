/* when 'reply' link is clicked */
jQuery('.comment-reply-link').click(function() {
	'use strict';
		jQuery('#cancel-comment-reply-link').show(0);
});
/* when comment reply is cancelled */
jQuery('#cancel-comment-reply-link').click(function() {
	'use strict';
		jQuery('#cancel-comment-reply-link').hide(0);
});