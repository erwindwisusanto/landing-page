<?php

namespace App\Helpers;

if (!function_exists('statusOK')) {
	function statusOK($message, $data)
	{
		$entity = [
			"status_code" => 200,
			"success" => true,
			"message" => $message,
			"data" => $data,
		];
		return response()->json($entity);
	}
}

if (!function_exists('statusInternalServerError')) {
	function statusInternalServerError($message, $data)
	{
		$entity = [
			"status_code" => 500,
			"success" => false,
			"message" => $message,
			"data" => $data,
		];
		return response()->json($entity);
	}
}

if (!function_exists('statusUnproccessableContent')) {
	function statusUnproccessableContent($message)
	{
		$entity = [
			"status_code" => 422,
			"success" => false,
			"message" => $message,
		];
		return response()->json($entity);
	}
}
