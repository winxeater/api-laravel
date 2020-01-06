<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proprietario;
use Faker\Generator as Faker;

$factory->define(\App\Proprietario::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'fantasy_name' => $faker->name,
        'cel' => $faker->cellPhoneNumber,
        'forma_pag' => $faker->randomElement($array = array ('Depósito em cheque', 'Depósito em dinheiro', 'Retirar cheque no local', 'Retirar dinheiro no local', 'Transf.bancária', 'Doc/Ted')),
        'rg' => $faker->isbn10,
        'flag' => $faker->randomElement($array = array ('0', '1'))
    ];
});
