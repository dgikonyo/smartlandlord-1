<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = ['invoiceNumber','deposit','damages','penalty','monthlyrent','paymentDate','amountPaid','apartmentId','tenantId'];
}
