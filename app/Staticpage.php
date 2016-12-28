<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    protected $table = 'staticpage';
    protected $fillable =  ['title','slug', 'image', 'imagemedium','imagethumb', 'description','metadescription','user_id','workflow_id','created_at', 'updated_at'];



    public function users()
    {
        return $this->belongsTo('App\Users','user_id');
    }


}
