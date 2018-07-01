<?php

namespace Modules\CustomFields\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\CustomFields\Entities\CustomFieldValue;

class CustomField extends Model
{
    protected $fillable = ['name', 'title'];

    public function value()
    {
    	return $this->hasMany(CustomFieldValue::class, 'custom_field_id');
    }
}
