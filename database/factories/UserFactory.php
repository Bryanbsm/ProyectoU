<?php

use Faker\Generator as Faker;

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

$factory->define(App\Product::class, function (Faker $faker) {
   

    return [
        'id' => $faker->int(),
        'nombre' => $faker->sentence(),
        'precio' => $faker->double(),
        'cantidad' => $faker->int()
        
        
    ];
});



$factory->define(App\Proveedor::class, function (Faker $faker) {
   

    return [
    'id'=> $faker->int(),
        'Nombre' => $faker->string(),
        'Telefono' => $faker->string(),
        'Direccion' => $faker->string(),
        'Correo' => $faker->string()
        
        
    ];
});


$factory->define(App\Venta::class, function (Faker $faker) {
   

    return [
    'id'=> $faker->int(),
        'producto' => $faker->string(),
        'cantidad' => $faker->int()
       
    ];
});

