<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dictionary;

class DictionariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create dummy data here , use elquent model only and 
        // create new insatnce pass the words array with image path 
        $assets = [

            ["words"=>["en"=>"happy","sr"=>"srećan"],"photo"=>"02f1f51da2aaae1b0f190e4b632adfa8"],
            ["words"=>["en"=>"nice","sr"=>"lijepo"],"photo"=>"8447a61b88ed25bd53aa7c14faeb3d2e"],
            ["words"=>["en"=>"friend","sr"=>"prijatelju"],"photo"=>"b039d5e3bc983722eb3c24062883dba7"],
            ["words"=>["en"=>"explosion","sr"=>"eksplozija"],"photo"=>"9e70d171faf4dd65df375f6965a014e8"],
            ["words"=>["en"=>"car","sr"=>"auto"],"photo"=>"b596ec8aaf473f1bb3851e23f55a92f0"],
            ["words"=>["en"=>"carrot","sr"=>"šargarepa"],"photo"=>"268d99ea6c0977fbecd771db9f691c3e"],
            ["words"=>["en"=>"fear","sr"=>"strah"],"photo"=>"f9abc1016fe45822c7a14f624eafd6c2"],
            ["words"=>["en"=>"soldier","sr"=>"vojnik"],"photo"=>"dda598c32858068ec7cebc8c26f9df6c"],
            ["words"=>["en"=>"book","sr"=>"knjiga"],"photo"=>"f44761170f05f7b8cec0c164ffe3f7ab"],
            ["words"=>["en"=>"relativity","sr"=>"relativnost"],"photo"=>"e30b1f7879b08f994fbcda8a22d172f4"],
            ["words"=>["en"=>"speed limit","sr"=>"ograničenje brzine"],"photo"=>"af5c7ba0826d7cceb5d5b6782349fa7c"],
            ["words"=>["en"=>"Earth","sr"=>"Zemlja"],"photo"=>"d77f5b07ac36cc4e4d17fb5f31806f2c"],
        
        ];

        foreach ($assets as $asset) {
            // $slug = Str::slug($location);
            $dicitonaryObject =  Dictionary::create(
                [
                    'Words' => $asset["words"],
                    
                ]
            );

            $dicitonaryObject->addMedia(database_path('/seeders/seedingImages/' . $asset["photo"] . '.jpg'))->toMediaCollection('photo');
        }
    }
}
