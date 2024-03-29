<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APIBaseController extends Controller {

    public function sendResponse($result, $message) {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("HTTP/1.1 200 OK");
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }


    public function sendResponsewithfalse($result, $message) {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("HTTP/1.1 200 OK");
        $response = [
            'success' => false,
            'data' => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }


    public function sendError($error, $errorMessages = [], $code = 404) {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("HTTP/1.1 $code OK");
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, 200);
    }

}
