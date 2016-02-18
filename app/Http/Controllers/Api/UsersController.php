<?php

/**
 *
 * @author      Joshua Bradshaw Matikinye
 * @email       joshua@samswebhosting.com
 * @copyright   Copyright (c) 2016 Sams Web Hosting
 */

namespace App\Http\Controllers\Api;

use App\Jobs\CreateNewSubscriptionUser;
use App\User;
use App\Transformers\UsersTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Class UsersController
 *
 * @package App\Http\Controllers
 */
class UsersController extends ApiController
{
    /**
     * @return mixed
     */
    public function index()
    {
        $users = User::all();

        if (!$users) {

            return $this->returnNotFoundResponse('Users not found');
        }

        return $this->returnResourceCollectionSuccess(
          $users->all(),
          new UsersTransformer()
        );
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {

            return $this->returnNotFoundResponse('User not found');
        }

        return $this->returnResourceSuccess(
          $user,
          new UsersTransformer()
        );
    }

    /**
     * @param Request $request
     *
     * @return array
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = $this->getValidator($data);

        if ($validator->fails()) {

            return $this->returnValidationErrorResponse(
              $validator->errors()->all()
            );
        }

        $this->dispatch(new CreateNewSubscriptionUser($data));

        return $this->returnResourceCreatedResponse();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return Validator
     */
    protected function getValidator(array $data)
    {
        return Validator::make(
          $data,
          [
            'username' => 'required|min:5|max:255',
            'email' => 'required|email|max:255|unique:users',
            'date_of_birth' => 'required|date',
            'password' => 'required|confirmed|min:8',
            'product_id' => 'required|numeric',
          ]
        );
    }


}