<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'store_id', 'image'];

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
