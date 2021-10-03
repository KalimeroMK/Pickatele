<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\StaticPage
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $image
 * @property string|null $imagemedium
 * @property string|null $imagethumb
 * @property string $description
 * @property string $metadescription
 * @property int $user_id
 * @property int $workflow_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereImagemedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereImagethumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereMetadescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Staticpage whereWorkflowId($value)
 * @mixin \Eloquent
 * @property-read \App\User $users
 */
class Staticpage extends Model
{
    protected $table = 'staticpage';
    protected $fillable =  ['title','slug', 'image', 'imagemedium','imagethumb', 'description','metadescription','user_id','workflow_id','created_at', 'updated_at'];



    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
