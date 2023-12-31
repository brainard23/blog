<?php 

namespace App\Helpers\Routes;

use RecursiveIteratorIterator;

class RouteHelper
{
 public static function includeRouteFiles(string $folder)
 {
    //iterate thru the v1 folder 
    $dirIterator = new \RecursiveDirectoryIterator($folder); 

    // @var \RecursiveDirectoryIterator | RecursiveIteratorIterator $it
    $it = new \RecursiveIteratorIterator($dirIterator);
    // file requred

    while ($it->valid()){
        if(!$it->isDot()
         && $it->isFile()
         && $it->isReadable()
         && $it->current()->getExtension() === 'php')
        {
            require $it->key();
        }

        $it->next();
        
        
    }
 }
};
