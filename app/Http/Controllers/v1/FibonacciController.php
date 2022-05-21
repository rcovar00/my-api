<?php

namespace App\Http\Controllers\v1;

// Framework
use Illuminate\Http\Request;
// App
use App\Helpers\Fibonacci;
use App\Http\Controllers\Controller;

class FibonacciController extends Controller
{
    public function getNumber(Request $request)
    {
        $httpCode = 200;
        $response = [];
        try {
            $number = Fibonacci::getNumber($request->n);

            $response = [
                'response' => [
                    'number' => $number
                ]
            ];
        } catch (\Exception $e) {
            $httpCode = 400;
            $response = [
                'errors' => [
                    'message' => trans('common.400_http_code')
                ]
            ];
        }

        return response()->json($response, $httpCode);
    }
}
