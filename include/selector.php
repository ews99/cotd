<?php
$ini_file = '/etc/config/cotd.properties';
$selector = 'pets';
if ( file_exists($ini_file) ) {
    $ini_array = parse_ini_file($ini_file);
    $selector = $ini_array['selector'];
}

if ( file_exists('data/'.$selector.'.php') ) {
    include('data/'.$selector.'.php');
} else {
    // Unsupported theme so default to pets
    include('data/pets.php');
}

// Set up page next and prev
include('prevnext.php');

// Change App name tag here
$_SESSION['app'] = 'COTD';

?>
