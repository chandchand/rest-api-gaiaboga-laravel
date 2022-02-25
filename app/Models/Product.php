<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $primaryKey = 'id_product';
    protected $fillable = [
        'name', 'image', 'description', 'id_category'
    ];
}
