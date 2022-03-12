<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $primaryKey = 'id';

    protected $fillable = [
        'name', 'image','url_tokped', 'url_shopee', 'url_lazada', 'description', 'category_id',
    ];
    public $appends=[
        'image_url'
    ];
    public function category()
    {
        // return $this->belongsTo('App\Category');
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute()
    {
        return asset('/storage/'. $this->image);
    }
}
