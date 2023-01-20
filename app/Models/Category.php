<?php

namespace App\Models;

use App\Models\Document;
use App\Models\Navitem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
    ];

    public $timestamps = false;

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function navitems()
    {
        return $this->hasMany(Navitem::class);
    }
}
