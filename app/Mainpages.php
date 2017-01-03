<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mainpages extends Model
{
    protected $table = 'educators';
    protected $fillable = [
        'title',
        'image',
        'imagemedium',
        'imagethumb',
        'sliderdescription',
        'paragraph',
        'headertitle',
        'secondtitle',
        'seconddescription',
        'secondheadertitle',
        'video',
        'sectiondescription',
        'sectiontitle',
        'itemimage',
        'itemtitle',
        'itemdescription',
        'item2image',
        'item2title',
        'item2description',
        'item3image',
        'item3title',
        'item3description',
        'item4image',
        'item4title',
        'item4description',
        'item5image',
        'item5title',
        'item5description',
        'item6image',
        'item6title',
        'item6description',
        'workflow_id',
        'created_at',
        'updated_at'
    ];


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
