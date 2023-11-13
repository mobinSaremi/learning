<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
      'user_id','fullname','product_id','phone_number','payment','address','order_status','send','send_price','ref_id','traking_code'
    ];
}
