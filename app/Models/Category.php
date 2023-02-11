<?php

namespace App\Models;

use App\Models\Addon;
use App\Models\Document;
use App\Models\Navitem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $category_type
 * @property string $category_name
 * @property string $folder_name
 * @property string $category_icon
 * @property string $svg_icon
 * @property string $fas_icon
 * @property string $button
 * @property string $color
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Addon> $addon
 * @property-read int|null $addon_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Document> $documents
 * @property-read int|null $documents_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Navitem> $navitems
 * @property-read int|null $navitems_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereButton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereFasIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereFolderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSvgIcon($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function navitems()
    {
        return $this->hasMany(Navitem::class);
    }

    public function addon()
    {
        return $this->hasMany(Addon::class);
    }
}
