<?php
/**
 *
 * @author      Joshua Bradshaw Matikinye
 * @email       joshua@samswebhosting.com
 * @copyright   Copyright (c) 2016 Sams Web Hosting
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\Transformer;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{
    protected function returnResourceCollectionSuccess(
      $data,
      Transformer $transformer
    ) {
        return Response::json(
          [
            'data' => $transformer->transformCollection(
              $data
            ),
          ],
          200
        );
    }

    protected function returnResourceSuccess(
      $data,
      Transformer $transformer
    ) {
        return Response::json(
          [
            'data' => $transformer->transform($data),
          ],
          200
        );
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    protected function returnNotFoundResponse($message)
    {
        return Response::json(
          [
            'error' => [
              'message' => $message,
            ],
          ],
          404
        );
    }

    /**
     * @return mixed
     */
    protected function returnResourceCreatedResponse()
    {
        return Response::json(
          [
            'data' => [
              'message' => 'Resource Created',
            ],
          ],
          201
        );
    }

    /**
     * @param $errors
     *
     * @return mixed
     */
    protected function returnValidationErrorResponse($errors)
    {
        return Response::json(
          [
            'error' => [
              'errors' => $errors,
            ],
          ],
          422
        );
    }
}