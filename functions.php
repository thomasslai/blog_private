<?php
register_nav_menu( 'primary', 'Hauptmenü' );
add_theme_support ( 'post-thumbnails' );

function get_random_color() {
    $colors = ['red lighten-2', 'red lighten-3', 'red lighten-4', 'red lighten-5', 'pink lighten-2', 'pink lighten-3', 'pink lighten-4', 'pink lighten-5', 'purple lighten-2', 'purple lighten-3', 'purple lighten-4', 'purple lighten-5', 'deep-purple lighten-2', 'deep-purple lighten-3', 'deep-purple lighten-4', 'deep-purple lighten-5', 'indigo lighten-2', 'indigo lighten-3', 'indigo lighten-4', 'indigo lighten-5', 'blue lighten-2', 'blue lighten-3', 'blue lighten-4', 'blue lighten-5', 'light-blue lighten-2', 'light-blue lighten-3', 'light-blue lighten-4', 'light-blue lighten-5', 'cyan lighten-2', 'cyan lighten-3', 'cyan lighten-4', 'cyan lighten-5', 'teal lighten-2', 'teal lighten-3', 'teal lighten-4', 'teal lighten-5', 'green lighten-2', 'green lighten-3', 'green lighten-4', 'green lighten-5', 'light-green lighten-2', 'light-green lighten-3', 'light-green lighten-4', 'light-green lighten-5', 'lime lighten-2', 'lime lighten-3', 'lime lighten-4', 'lime lighten-5', 'yellow lighten-2', 'yellow lighten-3', 'yellow lighten-4', 'yellow lighten-5', 'amber lighten-2', 'amber lighten-3', 'amber lighten-4', 'amber lighten-5', 'orange lighten-2', 'orange lighten-3', 'orange lighten-4', 'orange lighten-5', 'deep-orange lighten-2', 'deep-orange lighten-3', 'deep-orange lighten-4', 'deep-orange lighten-5', 'brown lighten-2', 'brown lighten-3', 'brown lighten-4', 'brown lighten-5', 'grey lighten-2', 'grey lighten-3', 'grey lighten-4', 'grey lighten-5', 'blue-grey lighten-2', 'blue-grey lighten-3', 'blue-grey lighten-4', 'blue-grey lighten-5']
    ;
    $random_keys = array_rand($colors,1);
    return $colors[$random_keys];
}
?>