<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    use HasFactory;


    protected $fillable=['confirm','register_id','phone_number','price'];


    public function register(){
        return $this->belongsTo(Register::class , 'register_id' , 'id');
    }

}
