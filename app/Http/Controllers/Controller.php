<?php

namespace App\Http\Controllers;

use Carbon\carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
	public function __construct(){
         setlocale(LC_TIME, 'Dutch'); 
         Carbon::setToStringFormat('Y-m-d');
    }

    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
}
