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
        'product_id', 'user_id', 'quantity', 'address' 
    ];    

}
