<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use \Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Game extends Model implements HasMedia
{
    use HasFactory;
    use HasTags;
    use InteractsWithMedia;

    public $fillable = [
        'name',
        'slug',
        'description',
        'year'
    ];

    public function images()
    {
        return $this->media()->where('collection_name', 'images');
    }

    public function filters(): MorphToMany
    {
        return $this->morphToMany(Filter::class, 'filterable');
    }
}
