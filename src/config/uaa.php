<?php return [

    /*
   |--------------------------------------------------------------------------
   | Set list of endpoint
   |--------------------------------------------------------------------------
   |
   */

    'endpoint'  => [
        'base-url'     => env('UAA_BASE_URL'),
        'token-key'    => 'uaa/oauth/token_key',
        'users'        => 'users',
        'client'       => 'uaa/oauth/token',
        'user-groups'  => 'user-groups',
        'profile-info' => 'profile-info',
        'permissions'  => 'permissions',
    ],

    /*
    |--------------------------------------------------------------------------
    | Setting JWT format encode and decode
    |--------------------------------------------------------------------------
    */
    'value'     => 'value',
    'algorithm' => 'alg',

    /*
    |--------------------------------------------------------------------------
    | Setting account basic authentication
    |--------------------------------------------------------------------------
    | username : xxx
    | password : xxx
    */

    'account'   => [
        'auth' => [
            'username' => env('UAA_USERNAME'),
            'password' => env('UAA_PASSWORD')
        ],
    ],
];