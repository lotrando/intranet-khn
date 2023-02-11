<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Slide
 *
 * @property int $id
 * @property int $training_id
 * @property string $slide_title
 * @property string $directory
 * @property string $path
 * @property int $position
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Training|null $training
 * @method static \Illuminate\Database\Eloquent\Builder|Slide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereSlideTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereTrainingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_id',
        'slide_title',
        'directory',
        'path',
        'position'
    ];

    public function training()
    {
        return $this->belongsTo(Training::class, 'training_id');
    }
}
