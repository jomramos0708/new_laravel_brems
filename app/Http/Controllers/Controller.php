<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJObs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesJobs, ValidatesRequests;

}
