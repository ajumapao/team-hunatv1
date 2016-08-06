<?php
function db118_user_css($plugin) { 
	?>.et_pb_gallery_title { display: none; }<?php 
}
add_action('wp_head.css', 'db118_user_css');