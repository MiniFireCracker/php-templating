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
$faker = Faker\Factory::create();

switch ($page){

  case 'social_profile':
    echo $twig->render('social_profile.php', ['data' =>[
    	 'company_name' => $faker->company,
    'company_catch_phrase' => $faker->catchPhrase,
    'company_product'=> $faker->word,
    'company_materials'=> $faker->word,
    'company_img'=> $faker->imageUrl($width = 640, $height = 480),
    'company_url'=> $faker->url,
    'company_color'=> $faker->safeColorName,
    'company_price'=> $faker->randomDigit,

    'user_name'=>  $faker->userName,
    'user_img'=> $faker->imageUrl($width, $height, 'cats', true, 'Faker'),
    'user_job'=> $faker->jobTitle,
    'user_mail'=> $faker->email,
    'user_phone'=> $faker->phoneNumber,
    'user_adress'=> $faker->streetAddress,
    'user_postcode'=> $faker->postcode,
    'user_city'=> $faker->city,
]]


);
    break;

  default :
    echo $twig->render('the_hell_is_wrong_with_you.php');
};
