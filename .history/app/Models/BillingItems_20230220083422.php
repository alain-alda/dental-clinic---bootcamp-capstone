<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingItem extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'billing_id',
        'transactionitem_id',
        'quantity',
        'total_cost'
    ];

    public function billing()
    {
        return $this->belongsTo(Billings::class, 'billing_id', 'billing_id');
    }

    public function transactionItem()
    {
        return $this->belongsTo(TransactionItem::class, 'transactionitem_id', 'id');
    }
}
