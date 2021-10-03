<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Bundle
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $imagemedium
 * @property string $imagethumb
 * @property string $link
 * @property string $description
 * @property int $price
 * @property int $user_id
 * @property int $workflow_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $createdby
 * @property-read User $user
 * @property-read Workflow $workflow
 * @method static Builder|Bundle newModelQuery()
 * @method static Builder|Bundle newQuery()
 * @method static Builder|Bundle query()
 * @method static Builder|Bundle whereCreatedAt($value)
 * @method static Builder|Bundle whereDescription($value)
 * @method static Builder|Bundle whereId($value)
 * @method static Builder|Bundle whereImage($value)
 * @method static Builder|Bundle whereImagemedium($value)
 * @method static Builder|Bundle whereImagethumb($value)
 * @method static Builder|Bundle whereLink($value)
 * @method static Builder|Bundle wherePrice($value)
 * @method static Builder|Bundle whereTitle($value)
 * @method static Builder|Bundle whereUpdatedAt($value)
 * @method static Builder|Bundle whereUserId($value)
 * @method static Builder|Bundle whereWorkflowId($value)
 * @mixin Eloquent
 */
class Bundle extends Model
{
    protected $table = 'bundle';
    protected $fillable = ['title', 'link', 'price', 'image', 'imagemedium', 'imagethumb', 'description', 'user_id', 'workflow_id', 'created_at', 'updated_at'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function createdby(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function workflow(): BelongsTo
    {
        return $this->belongsTo(Workflow::class, 'user_id');
    }
}
