<?php

return [

    'paths' => ['api/*', 'user', 'oauth/*'],
    'allowed_methods' => ['OPTIONS,POST,PUT,DELETE,GET'],
    'allowed_origins' => ['*'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => ['*'],
    'max_age' => 0,
    'supports_credentials' => true,
];