<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected  $fillable=['user_id','cake_id','pastry_id','quantity'];

    public function categorycake()
    {
        return $this->belongsTo(categorycake::class, 'cake_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorypastry()
    {
        return $this->belongsTo(categorypastry::class, 'pastry_id');
    }

}

