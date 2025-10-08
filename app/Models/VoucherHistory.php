<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherHistory extends Model
{
    use HasFactory;

    protected $fillable = ['voucher_id', 'user_id', 'order_id', 'amount'];

}