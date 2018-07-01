<?php

namespace Modules\CustomFields\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\CustomFields\Entities\CustomField;

class CustomFieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CustomField::class, 1)->create();
    }
}
