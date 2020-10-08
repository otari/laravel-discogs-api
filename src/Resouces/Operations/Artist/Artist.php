<?php

namespace Otsilosani\DiscogsLaravel\Resouces\Operations\Artist;

use Otsilosani\DiscogsLaravel\Contracts\OperationContract;
use Otsilosani\DiscogsLaravel\Resouces\Operations\Operation;

class Artist extends Operation implements OperationContract
{
    CONST URI = '/user/%s/';
    CONST METHOD = 'GET';

    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return array|mixed
     */
    public function run() {
        return [1,2,3];
    }

    /**
     * @inheritDoc
     */
    public function getRequestOptions()
    {
        // TODO: Implement getRequestOptions() method.
    }

    /**
     * @inheritDoc
     */
    public function getRequestUri(): string
    {
        return sprintf(self::URI, $this->id);
    }

    /**
     * @inheritDoc
     */
    public function getRequestMethod(): string
    {
        return self::METHOD;
    }
}