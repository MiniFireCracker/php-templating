<?php

require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();

?>
  <!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <main class= main>
            <div>
            <h1><?=$faker->company?></h1>
            <h2><?=$faker->catchPhrase?></h2>
            </div>

            <div>
                <h3>At <?=$faker->company?>, we create <?= $faker->word ?> made of <?= $faker->word ?>  </h3>
                <h3>Find out more on  <?=$faker->url ?></h3>
            </div>

            <div class=card>
                <img src=" <?=$faker->imageUrl($width = 640, $height = 480)?>">
                <h3><?= $faker->word ?></h3>
                <p> Material:<?= $faker->word ?> </p>
                <p> Color: <?= $faker->safeColorName  ?> </p>
                <h3><?= $faker->randomDigit ?>$only!</h3>
                <button>Take my money</button>
            </div>


        </main>
        <aside>
            <img id=User_img src="<?= $faker->imageUrl($width, $height, 'cats', true, 'Faker')?>">
            <h3><?= $faker->userName?></h3>
            <h3><?= $faker->jobTitle?></h3>
            <h3>Contact info</h3>

            <p><?= $faker->email ?></p>
            <p><?= $faker->phoneNumber ?></p>

            <p> <?= $faker->streetAddress?></p>
            <p> <?= $faker->postcode ." " . $faker->city  ?></p>


        </aside>
    </body>
</html>


<?php
/*
require_once 'vendor/autoload.php';


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
  // 'Lucy Cechtelar';
echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
echo $faker->text;
  // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
  // et sit et mollitia sed.
  // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
  // sit minima sint.
  */
?>