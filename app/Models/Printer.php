<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Printer
 *
 * @property int $id
 * @property string $printer_vendor
 * @property string $printer_type
 * @property string $printer_number
 * @property string $toner_id
 * @method static \Illuminate\Database\Eloquent\Builder|Printer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer wherePrinterNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer wherePrinterType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer wherePrinterVendor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Printer whereTonerId($value)
 * @mixin \Eloquent
 */
class Printer extends Model
{
    use HasFactory;

    protected $fillable = [
        '',
    ];
}
