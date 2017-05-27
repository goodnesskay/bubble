<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['type_of_vehicle','number_of_cars','location_for_the_wash',
                                    'wash_schedule','water_availability',
                                    'service_type','created_by','status'];

}
