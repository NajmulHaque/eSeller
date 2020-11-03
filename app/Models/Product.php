<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    protected $fillable = ['quantity'];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
