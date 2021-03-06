<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        'adminsekolah' => [
          'driver' => 'session',
          'provider' => 'adminsekolah',
        ],
        'adminsekolah-api' => [
            'driver' => 'token',
            'provider' => 'adminsekolah',
        ],
        'guru' => [
          'driver' => 'session',
          'provider' => 'guru',
        ],
        'guru-api' => [
            'driver' => 'token',
            'provider' => 'guru',
        ],
        'siswa' => [
          'driver' => 'session',
          'provider' => 'siswa',
        ],
        'siswa-api' => [
            'driver' => 'token',
            'provider' => 'siswa',
        ],
        
    ],
    //  Providers
    'providers' => [
        'adminsekolah' => [
            'driver' => 'eloquent',
            'model' => App\Models\Adminsekolah::class,
        ],
        'guru' => [
          'driver' => 'eloquent',
          'model' => App\Models\Guru::class,
        ],
        'users' => [
          'driver' => 'eloquent',
          'model' => App\User::class,
        ],
        'siswa' => [
          'driver' => 'eloquent',
          'model' => App\Models\Siswa::class,
        ],
        
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
