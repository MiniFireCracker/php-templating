<?php

require 'vendor/autoload.php';

$page= 'social_profile';

if(isset($_GET['page'])){
  $page = $_GET['page'];
};



$loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
$twig = new Twig_Environment($loader, [
  'cache' => false,
]);

switch ($page){

  case 'social_profile':
    echo $twig->render('social_profile.php');
    break;

  default :
    echo $twig->render('the_hell_is_wrong_with_you.php');
};
