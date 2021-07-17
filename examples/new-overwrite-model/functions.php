<?php
// add filter below to your functions
// STARSHIP_PREFIX == 'starship'
add_filter(STARSHIP_PREFIX . '_classes_models', function ($classes) {
	unset($classes['post']);
	$classes['post'] = 'Name\space\Path\Here\Models\Post';
	$classes['article'] = 'Name\space\Path\Here\Models\Article';
	return $classes;
});