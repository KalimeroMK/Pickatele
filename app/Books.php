<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'book';
    protected $fillable = [
        'title',
        'image',
        'imagemedium',
        'imagethumb',
        'slug',
        'video',
        'author',
        'age',
        'description',
        'level_id',
        'country_id',
        'categories_id',
        'partner_id',
        'bundle_id',
        'user_id',
        'workflow_id',
        'created_at',
        'updated_at',
        'country_code',
        'url_commun_file',
        'url_language_file',
        'book_language',
        'description_short',
        'backend_version',
        'atos',
        'lexile',
        'isFree',
        'isPreview',
        'coverCorrect',
        'isChoose',
        'priority',
        'freebook'
    ];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function partner()
    {
        return $this->belongsTo('App\User', 'partner_id');
    }

    public function bundle()
    {
        return $this->belongsTo('App\User', 'bundle_id');
    }

    public function genre()
    {
        return $this->belongsTo('App\Genre', 'categories_id');
    }

    public function country()
    {
        return $this->belongsTo('App\User', 'country_id');
    }

    public function createdby()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function workflow()
    {
        return $this->belongsTo('App\Workflow', 'user_id');
    }

    public function images()
    {
        return $this->belongsTo('App\Sliders', 'id', 'book_id');
    }
}
