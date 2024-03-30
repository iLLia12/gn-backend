<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use \Spatie\Tags\HasTags;

class Game extends Model implements HasMedia
{
    use HasFactory;
    use HasTags;
    use InteractsWithMedia;

    public function images()
    {
        return $this->media()->where('collection_name', 'images');
    }
}
