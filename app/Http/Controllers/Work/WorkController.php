<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


class WorkController extends Controller
{

    /**
     * Show a single article
     *
     * @return Response
     */
    public function showWork(){


        return view('work.welcomework');
    }
}
