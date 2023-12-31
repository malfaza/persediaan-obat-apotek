<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class outgoing extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'quantity', 'description'];
    
    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}
