<?php

use App\User;
use Faker\Generator;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(User::class, function(Generator $faker){
	$array = [
		'name'  => $faker->name,
		'email' => $faker->email,
		'password' => bcrypt('12345')
	];
	return $array;

});


/* MODEL FACTORY QUE YA ESTABA
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

*/