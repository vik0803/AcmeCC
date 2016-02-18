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
 * Class Transformer
 *
 * @package Transformers
 */
abstract class Transformer
{
    /**
     * @param array $items
     *
     * @return array
     */
    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }

    /**
     * @param Model $item
     *
     * @return mixed
     */
    abstract public function transform(Model $item);
}