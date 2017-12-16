<?php

    // Load Functions
    get_template_part("allfunctions");

    //loads scripts and styles
    add_action('wp_enqueue_scripts', 'scriptsAndStyles');

    //add babel
    add_filter( 'script_loader_tag', 'BabelType', 10,3 );

?>