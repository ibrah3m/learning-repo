<?php

namespace App\Repositories;

use App\Interfaces\DictionaryRepositoryInterface;
use App\Models\Dictionary;

class DictionaryRepository implements DictionaryRepositoryInterface 
{
    public function getAllDictionaries() 
    {
        return Dictionary::all()->map(function($dictionary){
            $dictionary->photo =urldecode($dictionary->getMedia('photo')[0]->getFullUrl());
            return [
                'id' => $dictionary->id,
                'photo' => $dictionary->photo,
                'words' => $dictionary->getTranslations('Words', ['en', 'sr']),
            ];
        });
    }

}
