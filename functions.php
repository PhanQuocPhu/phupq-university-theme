<?php

//Var
$a = 10;
//Include
include(get_theme_file_path('./inc/hooks/style-register.php'));
//include(get_theme_file_path('./inc/hooks/head-register.php'));
include(get_theme_file_path('./inc/hooks/setup-theme.php'));
//Hooks
add_action('wp_enqueue_scripts', 'style_register');
//add_action('wp_head', 'head_register', 5);
add_action('after_setup_theme', 'setup_theme');