<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    protected $table = 'tenants';
    protected $fillable = ['firstName', 'lastName'  ,'email' ,'placeOfWork', 	'idNumber', 'occupants','gender','checkinDate','dateCheckedOut'];
    public $timestamps = false; 
}
