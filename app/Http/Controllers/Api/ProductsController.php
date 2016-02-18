<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\Transformers\ProductsTransformer;
use App\Http\Requests;

class ProductsController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return $this->returnResourceCollectionSuccess(
          $products->all(),
          new ProductsTransformer()
        );
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $subscription = Product::find($id);

        if (!$subscription) {

            return $this->returnNotFoundResponse('Product not found');
        }

        return $this->returnResourceSuccess(
          $subscription,
          new ProductsTransformer()
        );
    }
}
