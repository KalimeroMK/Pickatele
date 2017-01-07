<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Levels extends \Baum\Node
{

    protected $table = 'levels';
    protected $fillable = array('name', 'parent_id', 'slug', 'file', 'filename', 'image', 'description');
    public $timestamps = false;

    public function book()
    {
        return $this->belongsTo('App\Book', 'category');
    }

    public static function getTree($categories)
    {

        $lists = '<ul>';
        foreach ($categories as $category)
            $lists .= self::renderNode($category);
        $lists .= "</ul>";
        return $lists;
    }


    public static function renderNode($node)
    {
        $list = '<li><a href="/admin/levels/' . $node->id . '/edit">' . $node->name;
        if ($node->children()->count() > 0) {
            $list .= '<ul>';
            foreach ($node->children as $child)
                $list .= self::renderNode($child);
            $list .= "</ul>";
        }

        $list .= "</a></li>";
        return $list;
    }
}
