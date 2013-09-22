<?php

//register_nav_menu( 'primary', __( 'Navigation Menu', 'twentythirteen' ) );


function register_main_menu(){
	
	$menu = array(
		'primary' 		=> __('Primary Menu'),
		'footer'		=> __('Footer Menu')
	);
	
	register_nav_menus($menu, 'restro');
}

register_main_menu();


$args = array(
	'name'          => sprintf( __( 'Sidebar %d' ), $i ),
	'id'            => "sidebar-$i",
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>n",
);


register_sidebar( $args );