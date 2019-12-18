<?php


namespace App\AvailabilityServices;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Color extends AvailabilityService
{
    /**
     * @param Builder $builder
     * @return Builder
     */
    protected function filter(Builder $builder) : Builder
    {
        return $builder->where('color', '=', request($this->queryParam));
    }
}
