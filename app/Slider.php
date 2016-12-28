<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';
    protected $fillable = ['title', 'link', 'image', 'imagemedium', 'imagethumb', 'description', 'user_id', 'workflow_id', 'created_at', 'updated_at'];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function createdby()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function workflow()
    {
        return $this->belongsTo('App\Workflow', 'user_id');
    }
}
