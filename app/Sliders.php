<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table = 'sliders';
    protected $fillable = ['image', 'imagemedium', 'imagethumb', 'user_id', 'book_id', 'workflow_id', 'created_at', 'updated_at'];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }


    public function book()
    {
        return $this->belongsTo('App\Book', 'book_id');
    }
}