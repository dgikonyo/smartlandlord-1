<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';
    public $timestamps = false; 
    protected $fillable = ['landtaxes','maintenance','salaries','entryDate','amount'];

}
