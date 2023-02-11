<?php

namespace App\Models;

use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Attendance
 *
 * @property int $id
 * @property int $training_id
 * @property string $personal_number
 * @property string $last_name
 * @property string $first_name
 * @property string|null $start_time
 * @property string|null $end_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Training|null $training
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance wherePersonalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereTrainingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_id',
        'personal_number',
        'last_name',
        'first_name',
        'start_time',
        'end_time'
    ];

    public function training()
    {
        return $this->belongsTo(Training::class, 'training_id');
    }
}
