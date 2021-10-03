<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Genre
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property int|null $parent_id
 * @property int|null $lft
 * @property int|null $rgt
 * @property int|null $depth
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Genre[] $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Genre[] $immediateDescendants
 * @property-read int|null $immediate_descendants_count
 * @property-read Genre|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|Node limitDepth($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Node withoutNode($node)
 * @method static \Illuminate\Database\Eloquent\Builder|Node withoutRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|Node withoutSelf()
 * @mixin \Eloquent
 * @property-read \App\Books $book
 */
class Genre extends \Baum\Node
{

    protected $table = 'categories';
    protected $fillable = array('name', 'parent_id', 'slug', 'file', 'filename', 'image', 'description');
    public $timestamps = false;

    public function book()
    {
        return $this->belongsTo(Books::class, 'category');
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
        $list = '<li><a href="/admin/genre/' . $node->id . '/edit">' . $node->name;
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
