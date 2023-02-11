<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Evidence
 *
 * @property int $id
 * @property string $evidence_type
 * @property string $evidence_pieces
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Department|null $department
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence query()
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereEvidencePieces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereEvidenceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evidence whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Evidence extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'pieces'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
