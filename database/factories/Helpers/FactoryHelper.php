<?php

namespace Database\Factories\Helpers;
use Illumitate\Database\Eloquent\Factories\HasFactory;

class FactoryHelper
{
    /**
     *  this function will get a random model id from the database
     *  @param string | HasFacortory $model
     */
    public static function getRandomModelId(string $model)
    {
        $count = $model::query()->count();

        if ($count === 0) {
            return $model::factory()->create()->id;
        } else {
            return rand(1, $count);
        }
    }
}
