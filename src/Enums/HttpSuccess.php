<?php

namespace BeepEat\ApiResponse\Enums;

enum HttpSuccess: int
{
    case OK = 200;
    case CREATED = 201;
    case ACCEPTED = 202;
    case NON_AUTHORITATIVE_INFORMATION = 203;
    case NO_CONTENT = 204;
    case RESET_CONTENT = 205;
    case PARTIAL_CONTENT = 206;
    case MULTI_STATUS = 207;
    case ALREADY_REPORTED = 208;
    case IM_USED = 226;

    public function toInt(): int
    {
        return match ($this) {
            self::OK => 200,
            self::CREATED => 201,
            self::ACCEPTED => 202,
            self::NON_AUTHORITATIVE_INFORMATION => 203,
            self::NO_CONTENT => 204,
            self::RESET_CONTENT => 205,
            self::PARTIAL_CONTENT => 206,
            self::MULTI_STATUS => 207,
            self::ALREADY_REPORTED => 208,
            self::IM_USED => 226,
        };
    }
}
