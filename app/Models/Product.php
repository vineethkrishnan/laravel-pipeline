<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Product extends Model
{

    /**
     * Get all product by passing through the pipeline to apply available filters
     *
     * @return Collection
     */
    public function getAllProducts() : Collection
    {
        return app(Pipeline::class)
            ->send($this->query())
            ->through([
                \App\AvailabilityServices\Name::class,
                \App\AvailabilityServices\Color::class,
                \App\AvailabilityServices\Speed::class,
                \App\AvailabilityServices\MinSpeed::class,
                \App\AvailabilityServices\MaxSpeed::class,
                \App\AvailabilityServices\Price::class,
                \App\AvailabilityServices\MinPrice::class,
                \App\AvailabilityServices\MaxPrice::class
            ])
            ->thenReturn()
            ->get();
    }
}
