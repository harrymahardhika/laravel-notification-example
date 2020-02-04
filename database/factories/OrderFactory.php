<?php

/** @var Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Order::class, static function (Faker $faker) {
    return [
        'order_number' => $faker->bankAccountNumber,
        'customer_name' => $faker->name,
        'shipping_address' => $faker->address,
        'amount' => sprintf('%s0000', random_int(10, 50)),
    ];
});
