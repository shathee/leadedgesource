<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'products';

    

    protected $fillable = [
        'product_name', 'in_stock', 'status', 'description' 
    ];    


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function category()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
