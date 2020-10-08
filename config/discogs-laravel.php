<?php

return [
    /**
     * For obtaining Discogs token visit https://www.discogs.com/settings/developers page.
     */
    'token' => env('DISCOGS_API_TOKEN', ''),
    'headers' => [
        /**
         * User-Agent
         * @example 'Awesome Record Shop/1.0 +http://awesomerecordshop.com'
         */
        'User-Agent' => env('DISCOGS_USER_AGENT_NAME', ''),
    ],


    'resources' => [
        'operations' => [
            \Otsilosani\DiscogsLaravel\Resouces\Operations\Artist\Artist::class => [
                'uri' => 'artists/{id}',
                'method' => 'GET',
            ]
        ]
    ]
];