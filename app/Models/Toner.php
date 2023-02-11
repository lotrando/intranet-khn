<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Toner
 *
 * @property int $id
 * @property string $toner_code
 * @property string $toner_type
 * @property string $toner_size
 * @property int $toner_price
 * @property-read Department|null $department
 * @property-read \App\Models\Printer|null $printer
 * @method static \Illuminate\Database\Eloquent\Builder|Toner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Toner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Toner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereTonerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereTonerPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereTonerSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Toner whereTonerType($value)
 * @mixin \Eloquent
 */
class Toner extends Model
{
    use HasFactory;

    protected $fillable = [
        'toner_code',
        'toner_name',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function printer()
    {
        return $this->belongsTo(Printer::class, 'printer_id');
    }
}
