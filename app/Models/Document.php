<?php

namespace App\Models;

use App\Models\Addon;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Document
 *
 * @property int $id
 * @property int $category_id
 * @property string $accordion_name
 * @property int|null $accordion_group
 * @property int $position
 * @property string $name
 * @property string $description
 * @property string|null $processed
 * @property string|null $authorize
 * @property string|null $examine
 * @property string|null $efficiency
 * @property string $revision
 * @property string|null $next_revision_date
 * @property string|null $tags
 * @property string|null $revision_date
 * @property string $file
 * @property string|null $unique_code
 * @property string $status
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Addon> $addons
 * @property-read int|null $addons_count
 * @property-read Category|null $category
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereAccordionGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereAccordionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereAuthorize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereEfficiency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereExamine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereNextRevisionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereProcessed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereRevisionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUniqueCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUserId($value)
 * @mixin \Eloquent
 */
class Document extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function addons()
    {
        return $this->hasMany(Addon::class)->where('status', 'Schváleno');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
