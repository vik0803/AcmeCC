<?php

namespace App\Http\Controllers;

use App\Http\Requests;

/**
 * Class PagesController
 *
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }
}
