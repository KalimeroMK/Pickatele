<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Sliders
 *
 * @property int $id
 * @property string $image
 * @property string $imagemedium
 * @property string $imagethumb
 * @property int $book_id
 * @property int $user_id
 * @property int $workflow_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders whereImagemedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders whereImagethumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sliders whereWorkflowId($value)
 * @mixin \Eloquent
 * @property-read \App\Books $book
 */
class Sliders extends Model
{
    protected $table = 'sliders';
    protected $fillable = ['image', 'imagemedium', 'imagethumb', 'user_id', 'book_id', 'workflow_id', 'created_at', 'updated_at'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function book()
    {
        return $this->belongsTo(Books::class, 'book_id');
    }
}