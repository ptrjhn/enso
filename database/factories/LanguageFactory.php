<?php

use Faker\Generator as Faker;
use LaravelEnso\Localisation\Models\Language;

$factory->define(Language::class, function (Faker $faker) {
    $countryCode = $faker->countryCode;

    return [
        'name' => $countryCode,
        'display_name' => strtolower($faker->country),
        'flag' => 'flag-icon flag-icon-'.$countryCode,
        'is_rtl' => $faker->boolean,
        'is_active' => $faker->boolean,
    ];
});
