<?php
 
namespace App\Traits;
 
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
 
trait ApiResponseTrait {

	public static function apiServerError($msg)
	{
		return response()->json([
            'status' => false,
            'message' => $msg,
            'errors' => null,
            'data' => null,
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
	}

	public static function apiResponseError($errors, $message = "Invaild Data", $code = JsonResponse::HTTP_BAD_REQUEST)
	{
		return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors,
            'data' => null,
        ], $code);
	}

	public static function apiResponseSuccess($data, $message = "Success", $code = JsonResponse::HTTP_OK)
	{
		return response()->json([
            'status' => true,
            'message' => $message,
            'errors' => null,
            'data' => $data,
        ], $code);
	}
}