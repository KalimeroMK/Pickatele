<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Workflow
 *
 * @property int $id
 * @property string $name
 * @property string $color
 * @method static Builder|Workflow newModelQuery()
 * @method static Builder|Workflow newQuery()
 * @method static Builder|Workflow query()
 * @method static Builder|Workflow whereColor($value)
 * @method static Builder|Workflow whereId($value)
 * @method static Builder|Workflow whereName($value)
 * @mixin Eloquent
 */
class Workflow extends Model
{
    protected $table = 'workflow';

}
