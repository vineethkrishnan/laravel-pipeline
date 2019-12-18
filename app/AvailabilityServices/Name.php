<?php


namespace App\AvailabilityServices;


use Illuminate\Database\Eloquent\Builder;

class Name extends AvailabilityService
{

    protected function filter(Builder $builder) : Builder
    {
        return $builder->where('name', 'LIKE', request($this->queryParam)."%");
    }


}
