<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Slider
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $imagemedium
 * @property string $imagethumb
 * @property string $link
 * @property string $description
 * @property int $user_id
 * @property int $workflow_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $createdby
 * @property-read User $user
 * @property-read Workflow $workflow
 * @method static Builder|Slider newModelQuery()
 * @method static Builder|Slider newQuery()
 * @method static Builder|Slider query()
 * @method static Builder|Slider whereCreatedAt($value)
 * @method static Builder|Slider whereDescription($value)
 * @method static Builder|Slider whereId($value)
 * @method static Builder|Slider whereImage($value)
 * @method static Builder|Slider whereImagemedium($value)
 * @method static Builder|Slider whereImagethumb($value)
 * @method static Builder|Slider whereLink($value)
 * @method static Builder|Slider whereTitle($value)
 * @method static Builder|Slider whereUpdatedAt($value)
 * @method static Builder|Slider whereUserId($value)
 * @method static Builder|Slider whereWorkflowId($value)
 * @mixin Eloquent
 */
class Slider extends Model
{
    protected $table = 'slider';
    protected $fillable = ['title', 'link', 'image', 'imagemedium', 'imagethumb', 'description', 'user_id', 'workflow_id', 'created_at', 'updated_at'];


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
