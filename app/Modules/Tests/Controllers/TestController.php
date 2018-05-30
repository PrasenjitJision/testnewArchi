<?php

namespace App\Modules\Tests\Controllers;

//loading namespaces
//use App\Http\Controllers\BaseController;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Response;
use Exception;


class TestController extends Controller{

	public function hello(){

		echo "hiii";
		return;
	}

	public function index(){

		echo "hello index";
		return;
	}

}


?>