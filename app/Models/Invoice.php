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
        'delivery_date',
    	'sub_total',
    	'discount_percentange',
    	'discount_ammount',
    	'total_discount',
        'payment_status',
        'delivered_status',
    	'total',
    	'paid_ammount',
    	'remaining_ammount',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

    public function incoiceItems()
    {
        return $this->hasMany('App\Models\InvoiceItem', 'invoice_id');
    }


}
