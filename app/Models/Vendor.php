<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Vendor extends Model
{
    use SearchableTrait;
    protected $table    =   'vendors';
    protected $fillable =   ['name', 'rating', 'phone', 'address', 'password',];
    
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
            'vendors.name' => 10,
            'vendors.phone' => 5,
            'vendors.address' => 2,
            'vendors.rating' => 2,
        ],
    ];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
