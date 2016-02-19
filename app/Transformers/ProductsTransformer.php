<?php
/**
 *
 * @author      Joshua Bradshaw Matikinye
 * @email       joshua@samswebhosting.com
 * @copyright   Copyright (c) 2016 Sams Web Hosting
 */

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;


/**
 * Class SubscriptionsTransformer
 *
 * @package Transformers
 */
class ProductsTransformer extends Transformer
{
    /**
     * @param Model $product
     *
     * @return array
     */
    public function transform(Model $product)
    {
        return [
          'product_id' => $product->id,
          'title' => $product->name,
          'price' => $product->price,
          'maximum_downloads' => $product->maximum_downloads,
        ];
    }
}
