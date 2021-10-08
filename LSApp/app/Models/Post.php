<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'posts';  //can give whatever name
    //Primary key
    public $primaryKey = 'id';   //can give whatever name
    //Timestamps
    public $timestamps = true; 

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
