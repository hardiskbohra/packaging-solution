<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;
    public $table = 'invoice_items';
    protected $fillable = [
    	'invoice_id',
    	'type',
    	'cost',
    	'quantity',
    	'price',
    ];
}
