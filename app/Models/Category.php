<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table    = 'categories';

    const HOT   = 1;

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'products_keywords','pk_product_id','pk_keyword_id');
    }
}
