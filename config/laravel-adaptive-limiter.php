<?php

return [
    'enabled' => env('LARAVEL_ADAPTIVE_LIMITER_ENABLED', true),
    'timeout' => env('LARAVEL_ADAPTIVE_LIMITER_TIMEOUT', 30),
    'log_channel' => env('LARAVEL_ADAPTIVE_LIMITER_LOG', 'stack'),
];
