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
class UsersTransformer extends Transformer
{
    /**
     * @param Model $user
     *
     * @return array
     *
     */
    public function transform(Model $user)
    {

        return [
          'display_name' => $user->username,
          'email' => $user->email,
          'DOB' => $user->date_of_birth,
          'permissions' => (new PermissionsTransformer())->transformCollection(
            $user->permissions->all()
          ),
        ];
    }
}
