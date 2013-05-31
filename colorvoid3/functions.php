<?php
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar1',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div><div class="box_bottom"></div></div>',
        'before_title' => '<div class="box_title">',
        'after_title' => '</div><div class="box_body">',
    ));	
register_sidebar(array('name'=>'sidebar2',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div><div class="box_bottom"></div></div>',
        'before_title' => '<div class="box_title">',
        'after_title' => '</div><div class="box_body">',
));
register_sidebar(array('name'=>'sidebar3',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div><div class="box_bottom"></div></div>',
        'before_title' => '<div class="box_title">',
        'after_title' => '</div><div class="box_body">',
));
register_sidebar(array('name'=>'sidebar4',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div><div class="box_bottom"></div></div>',
        'before_title' => '<div class="box_title">',
        'after_title' => '</div><div class="box_body">',
));



load_theme_textdomain('glass');

?>
