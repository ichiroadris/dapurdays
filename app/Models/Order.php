<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'payment_method', 'cake_name','total_cost' ,'status', 'customer_id', 'menu_id'
    ];
}
