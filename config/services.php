<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '431402332521-li3ubiru0l15uqqvo3op0g3fd014qm92.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://xs786968.xsrv.jp/authorized/google/callback',
    ],

    'facebook' => [
        'client_id' => '626167472813178',
        'client_secret' => 'a1ae5bdd5c28b5d3c9a63b3aa02f9226',
        'redirect' => 'https://xs786968.xsrv.jp/callback',
    ],

];
