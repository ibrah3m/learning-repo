<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Dictionary extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia ,HasTranslations;
    public $translatable = ['Words'];
    public $fillable =['Words'];

}
