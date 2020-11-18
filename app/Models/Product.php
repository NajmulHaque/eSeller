<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    use SearchableTrait;
    protected $fillable = ['quantity'];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 10,
            'products.details' => 5,
            'products.description' => 2,
        ],
    ];
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    public function sales()
    {
        return $this->hasMany('App\Models\OrderProduct');
    }
    public function reviews()
    {
        return $this->hasMany('App\Models\ProductReview');
    }
    public function vendors()
    {
        return $this->hasMany('App\Models\Vendor');
    }
    public function users()
    {
        return $this->hasMany('App\models\User');
    }
    public function mightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
    public function wishlist(){
        return $this->hasMany('App\Models\Wishlist');
    }
}
