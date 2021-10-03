<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Settings
 *
 * @property int $id
 * @property string $title
 * @property string $mainurl
 * @property string $email
 * @property string $description
 * @property string $logo
 * @property string $logomedium
 * @property string $logothumb
 * @property string $address
 * @property string $phone
 * @property string $twitter
 * @property string $facebook
 * @property string $skype
 * @property string $linkedin
 * @property string $gplus
 * @property string $youtube
 * @property string $flickr
 * @property string $pinterest
 * @property int $user_id
 * @property int $workflow_id
 * @property float $lat
 * @property float $lng
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $createdby
 * @property-read User $user
 * @property-read Workflow $workflow
 * @method static Builder|Settings newModelQuery()
 * @method static Builder|Settings newQuery()
 * @method static Builder|Settings query()
 * @method static Builder|Settings whereAddress($value)
 * @method static Builder|Settings whereCreatedAt($value)
 * @method static Builder|Settings whereDescription($value)
 * @method static Builder|Settings whereEmail($value)
 * @method static Builder|Settings whereFacebook($value)
 * @method static Builder|Settings whereFlickr($value)
 * @method static Builder|Settings whereGplus($value)
 * @method static Builder|Settings whereId($value)
 * @method static Builder|Settings whereLat($value)
 * @method static Builder|Settings whereLinkedin($value)
 * @method static Builder|Settings whereLng($value)
 * @method static Builder|Settings whereLogo($value)
 * @method static Builder|Settings whereLogomedium($value)
 * @method static Builder|Settings whereLogothumb($value)
 * @method static Builder|Settings whereMainurl($value)
 * @method static Builder|Settings wherePhone($value)
 * @method static Builder|Settings wherePinterest($value)
 * @method static Builder|Settings whereSkype($value)
 * @method static Builder|Settings whereTitle($value)
 * @method static Builder|Settings whereTwitter($value)
 * @method static Builder|Settings whereUpdatedAt($value)
 * @method static Builder|Settings whereUserId($value)
 * @method static Builder|Settings whereWorkflowId($value)
 * @method static Builder|Settings whereYoutube($value)
 * @mixin Eloquent
 */
class Settings extends Model
{

    protected $table = 'settings';
    protected $fillable = [
        'title',
        'mainurl',
        'email',
        'address',
        'logo',
        'logomedium',
        'logothumb',
        'description',
        'user_id',
        'workflow_id',
        'created_at',
        'updated_at',
        'phone',
        'twitter',
        'facebook',
        'linkedin',
        'skype',
        'gplus',
        'youtube',
        'flickr',
        'pinterest',
        'lat',
        'lng'
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
