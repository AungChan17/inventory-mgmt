<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /*
    *The attributes that are mass assignable.
    *
    *@var array
    */

    protected $fillable = [
        'name',
        'price',
        'photo',
        'category_id',
        'supplier_id'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function transactions()
    {
        return $this->belongsTo(Transaction::class);
    }

}
