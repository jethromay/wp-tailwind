<?php
get_header();
//------------------------------------------------------------------------------
get_template_with_vars(
	'app/templates/index',
	array(
		'id'    => get_the_ID(),
		'title' => get_the_title(),
	)
);
//------------------------------------------------------------------------------
get_footer();
