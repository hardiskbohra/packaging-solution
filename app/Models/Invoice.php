<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public $table = 'invoices';
    protected $fillable = [
    	'invoice_number',
    	'customer_id',
    	'date',
    	'sub_total',
    	'discount_percentange',
    	'discount_ammount',
    	'total_discount',
    	'total',
    	'paid_ammount',
    	'remaining_ammount',
    ];
}
