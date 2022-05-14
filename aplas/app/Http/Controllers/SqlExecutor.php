<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

Use Exception;

class SqlExecutor extends Controller {
	// json return

	function jsonReturner(
		$msg,
		$code,
		$data
	) {
		if ($data == "") {
			return response()->json(
				[
					'message' => $msg,
					'code' => $code,
					'data' => array()
				],$code
			);
		}else{
	return response()->json(
				[
					'message' => $msg,
					'code' => $code,
					'data' => $data
				],$code
			);

		}
	}

	public function index(Request $request) {
	
		return $this->jsonReturner("Run",200,"");

	}
	//
	public function Execute(Request $request) {
		$payload = Validator::make($request->all(),[
			'query' => 'required',
		],[
			'query.required' => 'please fill query',
		]);

		
	
	// check 
		if ($payload->fails()){
			return $this->jsonReturner(
				"Please set query",
				400,
				""
			);
		}
		try {
			// enable query log
			\DB::enableQueryLog();
			$jsonQueryStr = json_encode($request->json()->all(),TRUE);
			$decodeJSON = json_decode($jsonQueryStr);

			$query = \DB::select($decodeJSON->query);
			dd(\DB::getQueryLog());
			return $this->jsonReturner("Run",200,$query);
		} catch (Exception $e) {
			dd($e);
				return $this->jsonReturner("error",200,$e);
			}
		

	}
}
