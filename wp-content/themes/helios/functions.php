<?php 

require get_template_directory() . '/inc/function-admin.php';

$firstName = get_option('first_name');
$lastName = get_option('last_name');
$twitter = get_option('twitter');
echo 'Nome: '. $firstName . ' Sobrenome: ' . $lastName . ' Twitter: ' . $twitter;