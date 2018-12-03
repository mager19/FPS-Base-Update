<?php
function social_sharing_buttons($content) {
	global $post;
	if(is_singular('post')){
		// Get current page URL
		$iconURL = urlencode(get_permalink());

		// Get current page title
		$iconTitle = str_replace( ' ', '%20', get_the_title());

		// Get Post Thumbnail for pinterest
		$iconThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$iconTitle.'&amp;url='.$iconURL.'&amp;via=icon';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$iconURL;
		$googleURL = 'https://plus.google.com/share?url='.$iconURL;
		$tumblrURL = 'http://www.tumblr.com/share/link?url='.$iconURL;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$iconURL.'&amp;title='.$iconTitle;

		// Add sharing button at the end of page/page content
		$variable .= '<!-- icon.com social sharing. Get your copy here: http://icon.me/1VIxAsz -->';
		$variable .= '<div class="icon-social"><i class="fa fa-share-alt" aria-hidden="true"></i><b>SHARE IT ON</b>';
		$variable .= '<a class="icon-link" href="'. $twitterURL .'" target="_blank"><img src="'.get_template_directory_uri().'/img/social/twitter.png"></a>';
		$variable .= '<a class="icon-link" href="'.$facebookURL.'" target="_blank"><img src="'.get_template_directory_uri().'/img/social/facebook.png"></a>';
		$variable .= '<a class="icon-link" href="'.$googleURL.'" target="_blank"><img src="'.get_template_directory_uri().'/img/social/google.png"></a>';
		$variable .= '<a class="icon-link" href="'.$tumblrURL.'" target="_blank"><img src="'.get_template_directory_uri().'/img/social/tumblr.png"></a>';
		$variable .= '<a class="icon-link" href="'.$linkedInURL.'" target="_blank"><img src="'.get_template_directory_uri().'/img/social/linkedin.png"></a>';
		$variable .= '</div>';

		return $content.$variable;
	}else{
        return $content;
    }
};
add_filter( 'the_content', 'social_sharing_buttons');
