<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Script
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Script newModelQuery()
 * @method static Builder|Script newQuery()
 * @method static Builder|Script query()
 * @method static Builder|Script whereCode($value)
 * @method static Builder|Script whereCreatedAt($value)
 * @method static Builder|Script whereId($value)
 * @method static Builder|Script whereName($value)
 * @method static Builder|Script whereStatus($value)
 * @method static Builder|Script whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Script extends Model
{
    	protected $fillable =  ['name', 'code', 'status'];
}
