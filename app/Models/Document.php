<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable=['user_id','gozarname_photo','vaksan_photo','team_gozarname','team_vaksan'];
}
