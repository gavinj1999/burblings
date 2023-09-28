<?php

namespace App\Traits;

use Illuminate\Http\Request;
use MarkSitko\LaravelUnsplash\UnsplashFacade;

trait UnsplashResponse
{
     protected function getRandomImage()
     {
        $search = \Unsplash::randomPhoto()
        ->orientation('landscape')
        ->term('cars')
        ->toJson();

        return($search->urls->full."?w=600&h=400&dpr=2&crop=true");
     }

     protected function baseImage(){
        $imageString = "blog/1uQOZIXthuYXhdstGIdGg9REZLNtSP-metaMS5qcGc=-.jpg";
        return  $imageString;
     }

}
