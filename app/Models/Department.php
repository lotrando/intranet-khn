<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Department
 *
 * @property int $id
 * @property string $department_code
 * @property string $center_code
 * @property string $color_id
 * @property string $department_name
 * @property-read \App\Models\Adversevent|null $adversevent
 * @property-read Employee|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCenterCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepartmentCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepartmentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @mixin \Eloquent
 */
class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_code',
        'center_code',
        'department_name'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(Employee::class);
    }

    public function adversevent()
    {
        return $this->belongsTo(Adversevent::class);
    }
}
