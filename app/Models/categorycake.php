<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorycake extends Model
{
    use HasFactory;

    protected $primaryKey = 'cakeid';

    protected  $fillable=['name','price','image'];



}
