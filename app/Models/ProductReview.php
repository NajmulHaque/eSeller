<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $fillable =   ['rating','status','comments'];
    protected $table    =   'product_reviews';
}
