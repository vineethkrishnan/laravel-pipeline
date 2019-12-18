<?php


namespace App\AvailabilityServices;


use Illuminate\Database\Eloquent\Builder;

class Price extends AvailabilityService
{
    protected function filter(Builder $builder) : Builder
    {
        return $builder->where('speed', '=', request($this->queryParam));
    }
}
