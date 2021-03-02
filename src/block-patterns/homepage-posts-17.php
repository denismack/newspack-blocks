<?php
/**
 * Homepage Posts Pattern 17.
 *
 * @package Newspack_Blocks
 */

return array(
	'title'         => __( 'Homepage Posts Pattern 17', 'newspack-blocks' ),
	'content'       => "<!-- wp:group {\"backgroundColor\":\"primary\",\"textColor\":\"white\",\"align\":\"full\",\"className\":\"newspack-pattern homepage-posts__style-17\"} -->\n<div class=\"wp-block-group alignfull has-primary-background-color has-white-color has-text-color has-background newspack-pattern homepage-posts__style-17\"><div class=\"wp-block-group__inner-container\"><!-- wp:spacer {\"height\":20} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:newspack-blocks/homepage-articles {\"showExcerpt\":false,\"showImage\":false,\"showAuthor\":false,\"showAvatar\":false,\"postLayout\":\"grid\",\"columns\":4,\"postsToShow\":8,\"typeScale\":5,\"textColor\":\"white\"} /-->\n\n<!-- wp:spacer {\"height\":20} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer --></div></div>\n<!-- /wp:group -->",
	'viewportWidth' => 1280,
	'categories'    => array( 'newspack-homepage-posts' ),
);