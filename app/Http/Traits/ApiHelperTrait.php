<?php


namespace App\Http\Traits;


trait ApiHelperTrait
{

    public function sendResponse($result, $message = 'success', $code = 200)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, $code);
    }

    public function sendError($error, $errorMessages = [], $code = 200)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    public function failsValidate($errors)
    {
        $firstError = $errors->first();

        $response = [
            'success' => false,
            'message' => $firstError,
        ];

        return response()->json($response, 200);
    }
}
