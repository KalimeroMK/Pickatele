<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Books
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $imagemedium
 * @property string $imagethumb
 * @property string $slug
 * @property string $video
 * @property int $age
 * @property string $author
 * @property string $description
 * @property int $categories_id
 * @property int $level_id
 * @property int $country_id
 * @property int $partner_id
 * @property int $bundle_id
 * @property int $user_id
 * @property int $workflow_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $country_code
 * @property string $url_commun_file
 * @property string $url_language_file
 * @property string $book_language
 * @property string $description_short
 * @property string $backend_version
 * @property float $atos
 * @property string $lexile
 * @property int $isFree
 * @property int $isPreview
 * @property int $coverCorrect
 * @property int $isChoose
 * @property int $priority
 * @property int $freebook
 * @property-read User $bundle
 * @property-read User $country
 * @property-read User $createdby
 * @property-read Genre $genre
 * @property-read Sliders $images
 * @property-read User $partner
 * @property-read User $user
 * @property-read Workflow $workflow
 * @method static Builder|Books newModelQuery()
 * @method static Builder|Books newQuery()
 * @method static Builder|Books query()
 * @method static Builder|Books whereAge($value)
 * @method static Builder|Books whereAtos($value)
 * @method static Builder|Books whereAuthor($value)
 * @method static Builder|Books whereBackendVersion($value)
 * @method static Builder|Books whereBookLanguage($value)
 * @method static Builder|Books whereBundleId($value)
 * @method static Builder|Books whereCategoriesId($value)
 * @method static Builder|Books whereCountryCode($value)
 * @method static Builder|Books whereCountryId($value)
 * @method static Builder|Books whereCoverCorrect($value)
 * @method static Builder|Books whereCreatedAt($value)
 * @method static Builder|Books whereDescription($value)
 * @method static Builder|Books whereDescriptionShort($value)
 * @method static Builder|Books whereFreebook($value)
 * @method static Builder|Books whereId($value)
 * @method static Builder|Books whereImage($value)
 * @method static Builder|Books whereImagemedium($value)
 * @method static Builder|Books whereImagethumb($value)
 * @method static Builder|Books whereIsChoose($value)
 * @method static Builder|Books whereIsFree($value)
 * @method static Builder|Books whereIsPreview($value)
 * @method static Builder|Books whereLevelId($value)
 * @method static Builder|Books whereLexile($value)
 * @method static Builder|Books wherePartnerId($value)
 * @method static Builder|Books wherePriority($value)
 * @method static Builder|Books whereSlug($value)
 * @method static Builder|Books whereTitle($value)
 * @method static Builder|Books whereUpdatedAt($value)
 * @method static Builder|Books whereUrlCommunFile($value)
 * @method static Builder|Books whereUrlLanguageFile($value)
 * @method static Builder|Books whereUserId($value)
 * @method static Builder|Books whereVideo($value)
 * @method static Builder|Books whereWorkflowId($value)
 * @mixin Eloquent
 */
class Books extends Model
{
    protected $table = 'book';
    protected $fillable = [
        'title',
        'image',
        'imagemedium',
        'imagethumb',
        'slug',
        'video',
        'author',
        'age',
        'description',
        'level_id',
        'country_id',
        'categories_id',
        'partner_id',
        'bundle_id',
        'user_id',
        'workflow_id',
        'created_at',
        'updated_at',
        'country_code',
        'url_commun_file',
        'url_language_file',
        'book_language',
        'description_short',
        'backend_version',
        'atos',
        'lexile',
        'isFree',
        'isPreview',
        'coverCorrect',
        'isChoose',
        'priority',
        'freebook'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return BelongsTo
     */
    public function partner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'partner_id');
    }

    /**
     * @return BelongsTo
     */
    public function bundle(): BelongsTo
    {
        return $this->belongsTo(User::class, 'bundle_id');
    }

    /**
     * @return BelongsTo
     */
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'categories_id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(User::class, 'country_id');
    }

    public function createdby(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function workflow(): BelongsTo
    {
        return $this->belongsTo(Workflow::class, 'user_id');
    }

    public function images(): BelongsTo
    {
        return $this->belongsTo(Sliders::class, 'id', 'book_id');
    }
}
