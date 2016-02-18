<?php
/**
 *
 * @author      Joshua Bradshaw Matikinye
 * @email       joshua@samswebhosting.com
 * @copyright   Copyright (c) 2016 Sams Web Hosting
 */

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;

class PermissionsTransformer extends Transformer
{

    /**
     * @param Model $permission
     *
     * @return mixed
     * @internal param Model $item
     *
     */
    public function transform(Model $permission)
    {
        return [
          'permission_id' => $permission->id,
          'name' => $permission->label,
        ];
    }
}