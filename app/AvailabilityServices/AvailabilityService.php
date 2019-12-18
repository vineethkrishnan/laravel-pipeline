<?php


namespace App\AvailabilityServices;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

abstract class AvailabilityService
{
    protected $queryParam;

    /**
     * AvailabilityService constructor.
     */
    public function __construct()
    {
        $this->queryParam = Str::snake(class_basename($this));
    }

    /**
     * Handles the incoming requests
     *
     * @param $request
     * @param \Closure $next
     * @return Builder|mixed
     */
    public function handle($request,  \Closure $next)
    {

        if (!request()->has($this->queryParam)){
            return $next($request);
        }

        return $this->filter($next($request));

    }

    /**
     * @param Builder $builder
     * @return Builder
     */
    protected abstract function filter(Builder $builder) : Builder;
}
