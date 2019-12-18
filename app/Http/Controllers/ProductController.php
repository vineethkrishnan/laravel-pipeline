<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return mixed
     */
    public function index(Product $product)
    {
       return $this->product->getAllProducts();
    }

}
