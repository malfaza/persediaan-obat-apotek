<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'category_id', 'type_id', 'supplier_id'];
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function type()
    {
        return $this->belongsTo(type::class, 'type_id');
    }

    public function supplier()
    {
        return $this->belongsTo(supplier::class, 'supplier_id');
    }

    public function incoming(){
        return $this->hasMany(incoming::class);
    }

    public function outgoing(){
        return $this->hasMany(outgoing::class);
    }

    public function getTotalStockAttribute()
    {
        $incomingQuantity = $this->incoming->sum('quantity');
        $outgoingQuantity = $this->outgoing->sum('quantity');
        return $incomingQuantity - $outgoingQuantity;
    }
    protected $appends = ['total_stock'];
    
    
}
