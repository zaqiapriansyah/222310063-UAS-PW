<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheets extends Model
{
    use HasFactory;
    protected $table = 'sheets';
    protected $fillable = ['user_id','title','body'];
}
