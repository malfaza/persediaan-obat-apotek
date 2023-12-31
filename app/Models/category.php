<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;


class category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];
    public function product(){
        return $this->hasMany(Product::class);
    }
}
