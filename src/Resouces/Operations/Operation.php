<?php


namespace Otsilosani\DiscogsLaravel\Resouces\Operations;

abstract class Operation
{
    /**
     * @param string $format
     * @param array $array
     * @return string
     */
    protected function builtRequestUri(string $format, array $array): string
    {
        return vsprintf(preg_replace('({\w+})', '%s', $format), $array);
    }

    /**
     * @return array
     */
    protected function getConfiguration(): array
    {
        return config('discogs-laravel')['resources']['operations'][get_class($this)];
    }
}