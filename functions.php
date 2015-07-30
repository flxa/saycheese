<?php

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Bottom Content',
		'id' => 'bottom_content',
		'before_widget' => '<div id="%1$s" class="bottom_content_widget widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="offscreen">',
		'after_title' => '</h2>',
	));
}