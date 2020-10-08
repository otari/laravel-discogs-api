<?php


namespace Otsilosani\DiscogsLaravel;

use Otsilosani\DiscogsLaravel\Resouces\Operations\Operation;

class DiscogsApi
{
    public function __construct()
    {
        //
    }

    public function execute(Operation $operation)
    {
        //Prepare Guzzle

        //Get Guzzle Options from operation

        //Send Request

        //Return response

        return $operation->run();
    }
}