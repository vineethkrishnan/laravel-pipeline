<?php


namespace App\AvailabilityServices;


use Illuminate\Database\Eloquent\Builder;

class MinPrice extends AvailabilityService
{
    protected function filter(Builder $builder) : Builder
    {
        return $builder->where('price', '>=', request($this->queryParam));
    }
}
