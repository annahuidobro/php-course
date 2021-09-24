<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'author','price','shop_id'
    ];
    protected $guarded = [''];

    public function picture()
    {
        return $this->hasOne(Product::class, 'id', 'picture_id');
    }
}

