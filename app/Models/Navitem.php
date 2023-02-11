<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Navitem
 *
 * @property int $id
 * @property int $position
 * @property int $category_id
 * @property string $name
 * @property string $subname
 * @property string $alt_name
 * @property string $tooltip
 * @property string $color
 * @property string $page_title
 * @property string $route
 * @property string $favicon
 * @property string $fa_icon
 * @property string $svg_icon
 * @property string $icon_class
 * @property-read Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereAltName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereFaIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereIconClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem wherePageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereSubname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereSvgIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navitem whereTooltip($value)
 * @mixin \Eloquent
 */
class Navitem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
