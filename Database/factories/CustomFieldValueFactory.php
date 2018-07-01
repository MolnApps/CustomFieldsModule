<?php

use Faker\Generator as Faker;

use Modules\CustomFields\Entities\CustomField;
use Modules\CustomFields\Entities\CustomFieldValue;

$factory->define(CustomFieldValue::class, function (Faker $faker) {
    $customField = CustomField::find(1);

    return [
        'custom_field_id' => $customField->id,
        'value' => ucfirst($faker->word),
    ];
});
