<?php


namespace Otsilosani\DiscogsLaravel\Contracts;


interface OperationContract
{
    /**
     * @return mixed
     */
    public function getRequestOptions();

    /**
     * @return string
     */
    public function getRequestMethod() : string;

    /**
     * @param array $array
     * @return string
     */
    public function getRequestUri() : string;
}