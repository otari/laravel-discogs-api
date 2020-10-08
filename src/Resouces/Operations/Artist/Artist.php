<?php

namespace Otsilosani\DiscogsLaravel\Resouces\Operations\Artist;

use Otsilosani\DiscogsLaravel\Contracts\OperationContract;
use Otsilosani\DiscogsLaravel\Resouces\Operations\Operation;

class Artist extends Operation implements OperationContract
{
    private $id;

    private $configuration = [];

    /**
     * Artist constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
        $this->configuration = $this->getConfiguration();
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
    public function getRequestMethod(): string
    {
        return self::METHOD;
    }

    /**
     * @inheritDoc
     */
    public function getRequestUri(): string
    {
        return $this->builtRequestUri($this->configuration['uri'], array($this->id));
    }
}