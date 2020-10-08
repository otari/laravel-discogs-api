<?php


namespace Otsilosani\DiscogsLaravel;

use Illuminate\Support\Facades\Http;
use Otsilosani\DiscogsLaravel\Resouces\Operations\Operation;

class DiscogsApi
{
    public function __construct()
    {
        //
    }

    public function execute(Operation $operation)
    {
        dd($operation->getRequestUri());
//        $response = Http::get('https://api.discogs.com/artists/1/releases');
//        return $response->json();
        //Prepare Guzzle

        //Get Guzzle Options from operation

        //Send Request

        //Return response

        //return $operation->run();
    }
}