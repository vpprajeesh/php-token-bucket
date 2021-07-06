<?php
namespace Api\TokenBucket\Serializer;

use Api\TokenBucket\SerializerInterface;

/**
 * RawSerializer does not serialize or unserialize data, just keep it as it is.
 */
class RawSerializer implements SerializerInterface
{
    public function serialize($data)
    {
        return $data;
    }

    public function unserialize($value)
    {
        return $value;
    }
}
