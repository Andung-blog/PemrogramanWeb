<?php 

namespace App\Traits;

trait ApiResponseFormatter
{
    public function apiResponse($code = 200, $message = 'Success', $data = []) {
        http_response_code($code); // Mengatur HTTP status code
        return json_encode([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ]);
    }
    
    
}