<?php

namespace Androrim\ApiResponse;

use Androrim\ApiResponse\Enums\HttpErrors;
use Androrim\ApiResponse\Enums\HttpSuccess;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class ApiResponse
{
    public static function success($data = [], HttpSuccess $code = HttpSuccess::OK): JsonResponse
    {
        return Response::json(['data' => $data], $code->value);
    }

    public static function error(string $message, HttpErrors $code = HttpErrors::INTERNAL_SERVER_ERROR): JsonResponse
    {
        return Response::json(['error' => $message], $code->value);
    }

    public static function unauthorized(): JsonResponse
    {
        return self::error('Unauthorized', HttpErrors::UNAUTHORIZED);
    }

    public static function badRequest(): JsonResponse
    {
        return self::error('Bad Request', HttpErrors::BAD_REQUEST);
    }

    public static function internalServerError(): JsonResponse
    {
        return self::error('Internal Server Error', HttpErrors::INTERNAL_SERVER_ERROR);
    }
}
