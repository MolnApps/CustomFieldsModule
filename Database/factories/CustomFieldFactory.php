<?php

use Faker\Generator as Faker;

use Modules\CustomFields\Entities\CustomField;

$factory->define(CustomField::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name' => lcfirst($word),
        'title' => ucfirst($word),
    ];
});
