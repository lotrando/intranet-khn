<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Job;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $personal_number
 * @property string $image
 * @property string|null $title_preffix
 * @property string $last_name
 * @property string|null $middle_name
 * @property string|null $married_name
 * @property string $first_name
 * @property string|null $title_suffix
 * @property string $department_id
 * @property string $job_id
 * @property string|null $email
 * @property string $start_date
 * @property string|null $end_date
 * @property string|null $comment
 * @property string|null $phone
 * @property string|null $mobile
 * @property string $id_card
 * @property string|null $coffee
 * @property string $employment
 * @property int|null $position
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Department|null $department
 * @property-read Job|null $job
 * @property-read User|null $user
 * @method static \Database\Factories\EmployeeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCoffee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmployment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereIdCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMarriedName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePersonalNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereTitlePreffix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereTitleSuffix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Employee extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'personal_number',
        'image',
        'title_preffix',
        'last_name',
        'first_name',
        'middle_name',
        'married_name',
        'title_suffix',
        'department_id',
        'job_id',
        'email',
        'start_date',
        'end_date',
        'comment',
        'phone',
        'mobile',
        'id_card',
        'coffee',
        'employment',
        'position',
        'status'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'personal_number');
    }

    protected function serializeDate($dates)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $dates)->format('Y-m-d');
    }
}
