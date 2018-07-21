<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $number = 0;
    $nameArray = ['Jose', 'Sofia'];
    return [
        'name' => $nameArray[$number],
        'email' => $nameArray[$number++].'admin@gmail.com',
        'password' => Hash::make('secret'), // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\userInformation::class, function(Faker $faker){
  
  static $number = 1;
  return [
      'user_id' =>  $number++,
      'role' => 3,
      'role_name' => 'administrador',
      'first_lastname' => 'ninguno',
      'second_lastname' => 'ninguno',
      'branch_Office' => 'Sucursal Este'
    ];
});

$factory->define(App\Package::class, function (Faker $faker) {
    return [
        // 'code' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        'name' => $faker->randomElement(['TV', 'radio', 'phones', 'skate','microwave', 'book', 'clothes']),
        'weight' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 100),
        'dimensions' => $faker->numberBetween($min = 30, $max = 50) . 'mts X ' . $faker->numberBetween($min = 30, $max = 50) . 'mts',
        'weight_unit' => 'Kg',
        'material' => $faker->randomElement(['Plastic', 'Wood', 'metal']),
    ];
});
