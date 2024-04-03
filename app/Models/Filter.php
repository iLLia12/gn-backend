<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Filter extends Model
{
    use HasFactory;

    protected $hidden = [
        'pivot',
        'created_at', 
        'deleted_at', 
        'updated_at', 
        'category'
    ];

    public function games(): MorphToMany
    {
        return $this->morphedByMany(Game::class, 'filterable');
    }
}
