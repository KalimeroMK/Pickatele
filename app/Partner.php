<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Partner
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
 * @method static Builder|Partner newModelQuery()
 * @method static Builder|Partner newQuery()
 * @method static Builder|Partner query()
 * @method static Builder|Partner whereCreatedAt($value)
 * @method static Builder|Partner whereDescription($value)
 * @method static Builder|Partner whereId($value)
 * @method static Builder|Partner whereImage($value)
 * @method static Builder|Partner whereImagemedium($value)
 * @method static Builder|Partner whereImagethumb($value)
 * @method static Builder|Partner whereLink($value)
 * @method static Builder|Partner whereTitle($value)
 * @method static Builder|Partner whereUpdatedAt($value)
 * @method static Builder|Partner whereUserId($value)
 * @method static Builder|Partner whereWorkflowId($value)
 * @mixin Eloquent
 */
class Partner extends Model
{
    protected $table = 'partners';
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
