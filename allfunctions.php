<?php 

    // load scripts and styles

    function scriptsAndstyles(){
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
        wp_enqueue_script('react', 'https://unpkg.com/react@16/umd/react.production.min.js');
        wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js', array('react'));
        wp_enqueue_script('babel', 'https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js');
        wp_enqueue_script('main', get_template_directory_uri().'/scripts/main.js', array('react', 'react-dom','babel'));
        wp_enqueue_script('resources', get_template_directory_uri().'/resources.js', array());

    }

    function BabelType(  $tag, $handle, $src ) {
        if( $handle !== 'main' ) {
            return $tag;
        }
        return '<script src ="'. $src  . '"type="text/babel"></script>'. "\n";
    }

?>