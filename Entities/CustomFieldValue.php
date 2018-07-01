<?php

namespace Modules\CustomFields\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\CustomFields\Entities\CustomField;
use Modules\Clients\Entities\Client;

class CustomFieldValue extends Model
{
    protected $fillable = ['value'];

    public function customField()
    {
    	return $this->belongsTo(CustomField::class);
    }

    public function clients()
    {
    	return $this->morphedByMany(Client::class, 'custom_field_valuable');
    }
}
