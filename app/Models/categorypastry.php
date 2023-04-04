<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorypastry extends Model
{
    use HasFactory;

    protected $primaryKey = 'pastryid';

    protected  $fillable=['name','price','image'];
}
