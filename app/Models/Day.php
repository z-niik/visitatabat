<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable=[
      'sun1','sun2','sun3','sun4','wed1','wed2','wed3','wed4','fri1','fri2','fri3','fri4',
    ];
}
