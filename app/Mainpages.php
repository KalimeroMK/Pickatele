<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Mainpages
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $imagemedium
 * @property string $imagethumb
 * @property string $sliderdescription
 * @property string $paragraph
 * @property string $headertitle
 * @property string $secondtitle
 * @property string $seconddescription
 * @property string $secondheadertitle
 * @property string $video
 * @property string $thirddescription
 * @property string $sectiontitle
 * @property string $itemimage
 * @property string $itemtitle
 * @property string $itemdescription
 * @property string $item2image
 * @property string $item2title
 * @property string $item2description
 * @property string $item3image
 * @property string $item3title
 * @property string $item3description
 * @property string $item4image
 * @property string $item4title
 * @property string $item4description
 * @property string $item5image
 * @property string $item5title
 * @property string $item5description
 * @property string $item6image
 * @property string $item6title
 * @property string $item6description
 * @property int $user_id
 * @property int $workflow_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $createdby
 * @property-read User $user
 * @property-read Workflow $workflow
 * @method static Builder|Mainpages newModelQuery()
 * @method static Builder|Mainpages newQuery()
 * @method static Builder|Mainpages query()
 * @method static Builder|Mainpages whereCreatedAt($value)
 * @method static Builder|Mainpages whereHeadertitle($value)
 * @method static Builder|Mainpages whereId($value)
 * @method static Builder|Mainpages whereImage($value)
 * @method static Builder|Mainpages whereImagemedium($value)
 * @method static Builder|Mainpages whereImagethumb($value)
 * @method static Builder|Mainpages whereItem2description($value)
 * @method static Builder|Mainpages whereItem2image($value)
 * @method static Builder|Mainpages whereItem2title($value)
 * @method static Builder|Mainpages whereItem3description($value)
 * @method static Builder|Mainpages whereItem3image($value)
 * @method static Builder|Mainpages whereItem3title($value)
 * @method static Builder|Mainpages whereItem4description($value)
 * @method static Builder|Mainpages whereItem4image($value)
 * @method static Builder|Mainpages whereItem4title($value)
 * @method static Builder|Mainpages whereItem5description($value)
 * @method static Builder|Mainpages whereItem5image($value)
 * @method static Builder|Mainpages whereItem5title($value)
 * @method static Builder|Mainpages whereItem6description($value)
 * @method static Builder|Mainpages whereItem6image($value)
 * @method static Builder|Mainpages whereItem6title($value)
 * @method static Builder|Mainpages whereItemdescription($value)
 * @method static Builder|Mainpages whereItemimage($value)
 * @method static Builder|Mainpages whereItemtitle($value)
 * @method static Builder|Mainpages whereParagraph($value)
 * @method static Builder|Mainpages whereSeconddescription($value)
 * @method static Builder|Mainpages whereSecondheadertitle($value)
 * @method static Builder|Mainpages whereSecondtitle($value)
 * @method static Builder|Mainpages whereSectiontitle($value)
 * @method static Builder|Mainpages whereSliderdescription($value)
 * @method static Builder|Mainpages whereSlug($value)
 * @method static Builder|Mainpages whereThirddescription($value)
 * @method static Builder|Mainpages whereTitle($value)
 * @method static Builder|Mainpages whereUpdatedAt($value)
 * @method static Builder|Mainpages whereUserId($value)
 * @method static Builder|Mainpages whereVideo($value)
 * @method static Builder|Mainpages whereWorkflowId($value)
 * @mixin Eloquent
 */
class Mainpages extends Model
{
    protected $table = 'mainpages';
    protected $fillable = [
        'title',
        'slug',
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
        'thirddescription',
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
        'user_id',
        'created_at',
        'updated_at'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function createdby()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function workflow()
    {
        return $this->belongsTo(Workflow::class, 'user_id');
    }
}
