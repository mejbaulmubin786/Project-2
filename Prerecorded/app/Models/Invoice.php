<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    protected $fillable = ['total', 'discount', 'vat', 'payable', 'user_id', 'customer_id'];

    function customer():BelongsTo{
        return $this->belongsTo(Customer::class);
    }
}
